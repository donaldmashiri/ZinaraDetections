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
        Schema::create('video_detections', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('plate_number');
            $table->string('detection_type');
            $table->string('status');
            $table->string('signal_type');
            $table->string('lane_position');
            $table->string('wheel_crossed');
            $table->string('marking_color');
            $table->string('cross_alert');
            $table->string('driver_tendencies');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('video_detections');
    }
};
