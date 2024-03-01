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
        Schema::create('detalles__ventas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ventas_id')->constrained('ventas');

            $table->char('cantida');
            $table->char('precio_venta');
            $table->char('descuento');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalles__ventas');
    }
};
