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
        Schema::create('water_sensors', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->float('water_ph');
            $table->float('water_temperature');
            $table->float('water_tds');
            $table->float('water_level');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('water_sensors');
    }
};
