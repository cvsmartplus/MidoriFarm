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
        Schema::create('outdebts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('id_greenhouse')->references('id')->on('green_houses');
            $table->foreignId('id_customer')->references('id')->on('customers');
            $table->decimal('amount');
            $table->boolean('status');
            $table->date('date');
            $table->date('due_date');










        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('outdebts');
    }
};
