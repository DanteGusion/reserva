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
        Schema::create('pago', function (Blueprint $table) {
            $table->id('id_pag');
            $table->foreignId('id_res')->constrained('reserva','id_res')->onDelete('cascade')->onUpdate('cascade');
            $table->decimal('monto_pag',20, 2);
            $table->string('estado_pag',20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pago');
    }
};
