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
        Schema::create('supplier_debts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('id_greenhouse')->references('id')->on('green_houses');
            $table->foreignId('id_supplier')->references('id')->on('suppliers');
            $table->decimal('amount');
            $table->enum('status', ['Lunas', 'Belum Lunas', 'Tenggat Waktu']);
            $table->date('due_date');
            $table->date('debt_date');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('indebts');
    }
};
