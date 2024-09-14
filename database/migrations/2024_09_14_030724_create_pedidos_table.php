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
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id('id_pedido');
            $table->unsignedBigInteger('id_cliente');
            $table->unsignedBigInteger('id_juego');
            $table->integer('cantidad');
            $table->date('fecha_pedido');
            $table->decimal('total', 10, 2);

            // Foreign keys
            $table->foreign('id_cliente')->references('id_cliente')->on('clientes')->onDelete('cascade');
            $table->foreign('id_juego')->references('id_juego')->on('juegos')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedidos');
    }
};
