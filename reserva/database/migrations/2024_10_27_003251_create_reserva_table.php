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
        Schema::create('reserva', function (Blueprint $table) {
            $table->id('id_res');
            $table->foreignId('id_usu')->constrained('usuario','id_usu')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('id_ser')->constrained('servicio','id_ser')->onDelete('cascade')->onUpdate('cascade');
            $table->date('fecha_res');
            $table->time('hora_res');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reserva');
    }
};
