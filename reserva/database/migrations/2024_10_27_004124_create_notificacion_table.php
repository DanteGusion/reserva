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
        Schema::create('notificacion', function (Blueprint $table) {
            $table->id('id_not');
            $table->foreignId('id_usu')->constrained('usuario','id_usu')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('id_res')->constrained('reserva','id_res')->onDelete('cascade')->onUpdate('cascade');
            $table->string('tipo_not',20);
            $table->date('fecha_envio_not');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notificacion');
    }
};
