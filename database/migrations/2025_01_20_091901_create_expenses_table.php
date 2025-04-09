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
        Schema::create('expenses', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('id_user')->references('id')->on('users');
            $table->foreignId('id_asset')->references('id')->on('assets');
            $table->foreignId('id_cat_exp')->references('id')->on('category_expenses');
            $table->integer('subtotal');
            $table->string('description', 255);
            $table->date('date');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('expenses');
    }
};
