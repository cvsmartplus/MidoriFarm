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
        Schema::create('buys', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('id_product')->references('id')->on('product');
            $table->foreignId('id_asset')->references('id')->on('assets');
            $table->foreignId('id_costumer')->references('id')->on('costumers');
            $table->integer('quintity');
            $table->integer('subtotal');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buys');
    }
};
