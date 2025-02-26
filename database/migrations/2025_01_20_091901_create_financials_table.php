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
        Schema::create('financials', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('id_product')->references('id')->on('products');
            $table->foreignId('id_asset')->references('id')->on('assets');
            $table->foreignId('id_supplier')->references('id')->on('suppliers');
            $table->foreignId('id_user')->references('id')->on('users');
            $table->foreignId('id_category')->references('id')->on('categories');
            $table->integer('quantity');
            $table->integer('subtotal');
            $table->integer('total_price');
            $table->date('date');
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
