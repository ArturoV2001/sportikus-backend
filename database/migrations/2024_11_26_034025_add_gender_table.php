<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('genders', function (Blueprint $table) {
            $table->id();
            $table->string('name');
        });

        DB::table('genders')->insert([
            'name' => 'Mujer',
        ]);
        DB::table('genders')->insert([
            'name' => 'Hombre',
        ]);
    }

    public function down(): void
    {
        Schema::dropIfExists('genders');
    }
};
