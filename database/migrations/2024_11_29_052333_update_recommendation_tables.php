<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('recommendations', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropColumn('user_id');
        });
        Schema::create('recommendation_users', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('recommendation_user_recommendations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('recommendation_user_id');
            $table->unsignedBigInteger('recommendation_id');
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        // Eliminar la tabla 'recommendation_user_recommendations'
        Schema::dropIfExists('recommendation_user_recommendations');

        // Eliminar la tabla 'recommendation_users'
        Schema::dropIfExists('recommendation_users');

        // Restaurar la columna 'user_id' en la tabla 'recommendations'
        Schema::table('recommendations', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->nullable(); // Agrega la columna nuevamente
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); // Restaura la relación foránea
        });
    }
};
