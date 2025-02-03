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
        Schema::create('revenues', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('id_sale')->references('id')->on('sales');
            $table->foreignid('id_user')->references(column: 'id')->on('users');
            $table->foreignId('id_greenhouse')->references('id')->on('green_houses');
            $table->date('date');
            $table->integer('total_price');
            $table->integer('total_discount');
            $table->integer('revenue');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('revenues');
    }
};
