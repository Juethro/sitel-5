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
        Schema::create('rooms', function (Blueprint $table) {
            $table->id('id_room');
            $table->string('room_number');
            $table->unsignedBigInteger('id_roomtype');
            $table->foreign('id_roomtype')->references('id_roomtype')->on('roomtypes');
            $table->enum('status', array('ready','checkined','checkouted', 'problem'));
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
