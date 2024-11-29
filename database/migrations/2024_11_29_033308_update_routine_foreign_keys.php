<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('routines', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropColumn('user_id');
            $table->unsignedBigInteger('ailment_id')->nullable();
            $table->tinyInteger('days')->nullable();
            $table->foreign('ailment_id')->references('id')->on('ailments');
        });

        Schema::table('users', function (Blueprint $table) {
            $table->unsignedBigInteger('routine_id')->nullable();
            $table->foreign('routine_id')->references('id')->on('routines');
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['routine_id']);
            $table->dropColumn('routine_id');
        });

        Schema::table('routines', function (Blueprint $table) {
            $table->dropForeign(['ailment_id']);
            $table->dropColumn('ailment_id');
            $table->dropColumn('days');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }
};
