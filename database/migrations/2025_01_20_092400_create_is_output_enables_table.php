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
        Schema::create('is_output_enables', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_greenhouse')->references('id')->on('green_houses');
            $table->boolean('pump_water');
            $table->boolean('pump_waterdrop');
            $table->boolean('rolling_roof');
            $table->timestamp('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('is_output_enables');
    }
};
