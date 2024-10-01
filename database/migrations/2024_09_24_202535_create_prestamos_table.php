<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('prestamos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('libro_id');
            $table->unsignedBigInteger('usuario_id');
            $table->date('fecha_prestamo');
            $table->date('fecha_devolucion');
            $table->date('fecha_devolucion_real')->nullable();
            $table->enum('estado', ['Pendiente', 'Devuelto', 'Atrasado']);
            $table->timestamps();

            // Foreign keys
            $table->foreign('libro_id')->references('id')->on('libros')->onDelete('cascade');
            $table->foreign('usuario_id')->references('id')->on('usuarios')->onDelete('cascade');
        });
    }

    public function down(): void {
        Schema::dropIfExists('prestamos');
    }
};
