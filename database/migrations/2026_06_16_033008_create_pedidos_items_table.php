<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pedidos_items', function (Blueprint $table) {
            $table->id();

            $table->integer('quantidade');

            $table->decimal('preco', 8, 2);

            $table->unsignedBigInteger('pedido_id');

            $table->foreign('pedido_id')
                  ->references('id')
                  ->on('pedidos');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pedidos_items');
    }
};