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
        Schema::create('order_sales', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->foreignId('id_greenhouse')->references('id')->on('green_houses');
            $table->foreignId('id_product')->references('id')->on('products');
            $table->foreignId('id_sale')->references('id')->on('sales');
            $table->integer('quantity');
            $table->integer('subtotal');
            $table->enum('status', ['paid']);
            $table->date('date');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_sales');
    }
};
