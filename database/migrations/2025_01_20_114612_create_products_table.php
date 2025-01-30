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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('id_greenhouse')->references('id')->on('green_houses');
            $table->string('name_product', 255);
            $table->integer('cost_price');
            $table->integer('selling_price');
            $table->integer('stock');
            $table->foreignId('id_category')->references('id')->on('category_products');
            $table->integer('discount');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
