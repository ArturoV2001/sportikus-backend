<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        // Tabla 'users'
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('name', 100);
            $table->string('last_name', 100);
            $table->decimal('weight', 3, 2)->nullable();
            $table->date('birthdate');
            $table->timestamps();
            $table->softDeletes();
        });

        // Tabla 'biometric_data'
        Schema::create('biometric_data', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->integer('heart_frequency')->nullable();
            $table->integer('pressure')->nullable();
            $table->integer('calories')->nullable();
            $table->decimal('sleep_quality', 3, 2)->nullable();
            $table->integer('sleep_minutes')->nullable();
            $table->integer('steps')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        // Tabla 'ailments'
        Schema::create('ailments', function (Blueprint $table) {
            $table->id();
            $table->string('name', 90);
            $table->string('description', 300)->nullable();
            $table->tinyInteger('cronic');
            $table->timestamps();
            $table->softDeletes();
        });

        // Tabla 'ailment_user'
        Schema::create('ailment_user', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('ailment_id');
            $table->timestamps();
            $table->softDeletes();
        });

        // Tabla 'recommendations'
        Schema::create('recommendations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->text('recommendation');
            $table->timestamps();
            $table->softDeletes();
        });

        // Tabla 'meals'
        Schema::create('meals', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->integer('total_calories')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        // Tabla 'meal_foods'
        Schema::create('meal_foods', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('meal_id');
            $table->unsignedBigInteger('food_id');
            $table->integer('quantity');
            $table->decimal('calories', 5, 2);
            $table->timestamps();
            $table->softDeletes();
        });

        // Tabla 'foods'
        Schema::create('foods', function (Blueprint $table) {
            $table->id();
            $table->string('name', 80);
            $table->text('image')->nullable();
            $table->integer('calories_per_unit');
            $table->unsignedBigInteger('category_id');
            $table->tinyInteger('quality');
            $table->integer('protein')->nullable();
            $table->integer('fat')->nullable();
            $table->integer('carbohidrate')->nullable();
            $table->decimal('step', 3, 2);
            $table->timestamps();
            $table->softDeletes();
        });

        // Tabla 'food_units'
        Schema::create('food_units', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->timestamps();
            $table->softDeletes();
        });

        // Tabla 'categories'
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name', 80);
            $table->timestamps();
            $table->softDeletes();
        });

        // Tabla 'routine'
        Schema::create('routine', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('frequency')->nullable();
            $table->integer('duration')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
            $table->softDeletes();
        });

        // Tabla 'routine_exercises'
        Schema::create('routine_exercises', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('repetitions');
            $table->tinyInteger('sets');
            $table->unsignedBigInteger('routine_id');
            $table->unsignedBigInteger('exercise_id');
            $table->tinyInteger('day');
            $table->timestamps();
            $table->softDeletes();
        });

        // Tabla 'exercises_best_performance'
        Schema::create('exercises_best_performance', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('routine_exercise_id');
            $table->decimal('weight', 3, 2);
            $table->tinyInteger('sets')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        // Tabla 'exercises'
        Schema::create('exercises', function (Blueprint $table) {
            $table->id();
            $table->string('name', 150);
            $table->string('description', 300)->nullable();
            $table->unsignedBigInteger('muscle_id');
            $table->timestamps();
            $table->softDeletes();
        });

        // Tabla 'muscles'
        Schema::create('muscles', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('description', 300)->nullable();
            $table->timestamps();
        });

        // Tabla 'muscular_groups'
        Schema::create('muscular_groups', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('description', 300)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('muscular_groups');
        Schema::dropIfExists('muscles');
        Schema::dropIfExists('exercises');
        Schema::dropIfExists('exercises_best_performance');
        Schema::dropIfExists('routine_exercises');
        Schema::dropIfExists('routine');
        Schema::dropIfExists('categories');
        Schema::dropIfExists('food_units');
        Schema::dropIfExists('foods');
        Schema::dropIfExists('meal_foods');
        Schema::dropIfExists('meals');
        Schema::dropIfExists('recommendations');
        Schema::dropIfExists('ailment_user');
        Schema::dropIfExists('ailments');
        Schema::dropIfExists('biometric_data');
        Schema::dropIfExists('users');
    }
};
