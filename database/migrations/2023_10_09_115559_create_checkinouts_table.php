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
        Schema::create('checkinouts', function (Blueprint $table) {
            $table->id('id_check');
            $table->unsignedBigInteger('id_booking');
            $table->dateTime('checkIn_date')->nullable();
            $table->dateTime('checkOut_date')->nullable();
            $table->foreign('id_booking')->references('id_booking')->on('bookings');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('checkinouts');
    }
};
