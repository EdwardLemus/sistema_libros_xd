<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //
        Schema::create('prestamos', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedBigInteger('id_usuario');
            $table->unsignedBigInteger('id_libro');
            $table->dateTime('fecha_prestamo');
            $table->dateTime('fecha_devolucion')->nullable;
            $table->enum('status',['pendiente','devuelto']);
            $table->timestamps();
        
            $table->foreign('id_usuario')->references('id')->on('usuarios');
            $table->foreign('id_libro')->references('id')->on('libros');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
