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
        Schema::create('iots', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('id_greenhouse')->references('id')->on('green_houses');
            $table->foreignId('sensor_id')->references('id')->on('sensors');
            $table->float('value');
            $table->foreignId('id_cat_notif')->references('id')->on('category_notifications');
            $table->string('log');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('iots');
    }
};
