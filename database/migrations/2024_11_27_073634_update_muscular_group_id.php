<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('muscular_groups', function (Blueprint $table) {
            $table->dropTimestamps();
            $table->dropColumn('description');
        });
        Schema::table('muscles', function (Blueprint $table) {
            $table->dropTimestamps();
            $table->dropColumn('description');
            $table->unsignedBigInteger('muscular_group_id')->default(1);
            $table->foreign('muscular_group_id')->references('id')->on('muscular_groups');
        });
    }

    public function down(): void
    {
        // Restaurar cambios en la tabla `muscular_groups`
        Schema::table('muscular_groups', function (Blueprint $table) {
            $table->timestamps(); // Vuelve a agregar created_at y updated_at
            $table->text('description')->nullable(); // Vuelve a agregar la columna description
        });

        // Restaurar cambios en la tabla `muscles`
        Schema::table('muscles', function (Blueprint $table) {
            $table->timestamps(); // Vuelve a agregar created_at y updated_at
            $table->text('description')->nullable(); // Vuelve a agregar la columna description
            $table->dropForeign(['muscular_group_id']); // Elimina la clave foránea agregada en up()
            $table->dropColumn('muscular_group_id'); // Elimina la columna agregada en up()
        });
    }
};
