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
        Schema::create('devices', function (Blueprint $table) {
            $table->id();
            $table->uuid('deviceId');
            $table->string('name');
            $table->string('brand');
            $table->string('model');
            $table->string('serialNumber');
            $table->string('location');
            $table->datetime('last_calibrated_at');
            $table->datetime('next_calibrated_at');
            $table->enum('result',['Tidak Laik Pakai', 'Laik Pakai']);
            $table->string('status');
            $table->string('qr_code');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('devices');
    }
};
