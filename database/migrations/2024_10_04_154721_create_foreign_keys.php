<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        // Llaves foráneas de la tabla 'biometric_data'
        Schema::table('biometric_data', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });

        // Llaves foráneas de la tabla 'ailment_user'
        Schema::table('ailment_user', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('ailment_id')->references('id')->on('ailments')->onDelete('cascade');
        });

        // Llaves foráneas de la tabla 'recommendations'
        Schema::table('recommendations', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });

        // Llaves foráneas de la tabla 'meals'
        Schema::table('meals', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });

        // Llaves foráneas de la tabla 'meal_foods'
        Schema::table('meal_foods', function (Blueprint $table) {
            $table->foreign('meal_id')->references('id')->on('meals')->onDelete('cascade');
            $table->foreign('food_id')->references('id')->on('foods')->onDelete('cascade');
        });

        // Llaves foráneas de la tabla 'foods'
        Schema::table('foods', function (Blueprint $table) {
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });

        // Llaves foráneas de la tabla 'routine'
        Schema::table('routine', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });

        // Llaves foráneas de la tabla 'routine_exercises'
        Schema::table('routine_exercises', function (Blueprint $table) {
            $table->foreign('routine_id')->references('id')->on('routine')->onDelete('cascade');
            $table->foreign('exercise_id')->references('id')->on('exercises')->onDelete('cascade');
        });

        // Llaves foráneas de la tabla 'exercises_best_performance'
        Schema::table('exercises_best_performance', function (Blueprint $table) {
            $table->foreign('routine_exercise_id')->references('id')->on('routine_exercises')->onDelete('cascade');
        });

        // Llaves foráneas de la tabla 'exercises'
        Schema::table('exercises', function (Blueprint $table) {
            $table->foreign('muscle_id')->references('id')->on('muscles')->onDelete('cascade');
        });
    }

    public function down()
    {
        // Eliminar llaves foráneas
        Schema::table('biometric_data', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
        });

        Schema::table('ailment_user', function (Blueprint $table) {
            $table->dropForeign(['user_id', 'ailment_id']);
        });

        Schema::table('recommendations', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
        });

        Schema::table('meals', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
        });

        Schema::table('meal_foods', function (Blueprint $table) {
            $table->dropForeign(['meal_id', 'food_id']);
        });

        Schema::table('foods', function (Blueprint $table) {
            $table->dropForeign(['category_id']);
        });

        Schema::table('routine', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
        });

        Schema::table('routine_exercises', function (Blueprint $table) {
            $table->dropForeign(['routine_id', 'exercise_id']);
        });

        Schema::table('exercises_best_performance', function (Blueprint $table) {
            $table->dropForeign(['routine_exercise_id']);
        });

        Schema::table('exercises', function (Blueprint $table) {
            $table->dropForeign(['muscle_id']);
        });
    }
};
