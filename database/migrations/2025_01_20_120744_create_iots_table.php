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
            $table->foreignId('id_water')->references('id')->on('water_sensors');
            $table->foreignId('id_dirt')->references('id')->on('dirt_sensors');
            $table->foreignId('id_air')->references('id')->on('air_sensors');
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
