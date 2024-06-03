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
        Schema::create('servicios', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cliente_id')->constrained();
            $table->foreignId('equipo_id')->constrained();
            $table->foreignId('tecnico_id')->constrained();
            $table->date('fecha_recepcion');
            $table->text('problema_reportado');
            $table->enum('estado', ['recibido', 'reparando', 'finalizado', 'entregado']);
            $table->text('diagnostico')->nullable();
            $table->text('solucion')->nullable();
            $table->date('fecha_entrega')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('servicios');
    }
};
