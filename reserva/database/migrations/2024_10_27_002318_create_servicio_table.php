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
        Schema::create('servicio', function (Blueprint $table) {
            $table->id('id_ser');
            $table->string('nombre_ser',50);
            $table->string('descripcion_ser',200);
            $table->decimal('costo_ser',20, 2);
            $table->boolean('disponible_ser');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('servicio');
    }
};
