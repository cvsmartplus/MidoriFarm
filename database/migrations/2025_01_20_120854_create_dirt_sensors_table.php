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
        Schema::create('dirt_sensors', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->float('dirt_ph');
            $table->float('dirt_moisture');
            $table->float('dirt_temperature');
            $table->float('dirt_nitrogen');
            $table->float('dirt_pospat');
            $table->float('dirt_kalium');
            $table->float('dirt_ec');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dirt_sensors');
    }
};
