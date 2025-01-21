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
        Schema::create('green_houses', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('name');
            $table->integer('address');
            $table->foreignId('id_user')->references('id')->on('users');
            $table->foreignId('id_revenue')->references('id')->on('revenues');
            $table->foreignId('id_expense')->references('id')->on('expenses');
            $table->foreignId('id_indebts')->references('id')->on('indebts');
            $table->foreignId('id_outdebts')->references('id')->on('outdebts');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('green_houses');
    }
};
