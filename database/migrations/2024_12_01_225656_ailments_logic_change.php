<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::dropIfExists('ailment_user');

        Schema::table('users', function (Blueprint $table) {
            $table->unsignedBigInteger('ailment_id')->nullable();
            $table->foreign('ailment_id')->references('id')->on('ailments');
        });
        Schema::table('ailments', function (Blueprint $table) {
            $table->text('routine_description')->nullable();
        });
    }

    public function down(): void
    {
        Schema::create('ailment_user', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('ailment_id');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('ailment_id')->references('id')->on('ailments')->onDelete('cascade');
        });

        Schema::table('ailments', function (Blueprint $table) {
            $table->dropColumn('routine_description');
        });

        Schema::table('ailment_user', function (Blueprint $table) {
            $table->dropForeign(['ailment_id']);
            $table->dropColumn('ailment_id');
        });
    }
};
