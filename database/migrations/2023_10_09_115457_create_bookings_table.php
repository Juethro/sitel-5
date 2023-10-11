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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id('id_booking');
            $table->date('booking_date');
            $table->date('start_date');
            $table->date('finish_date');
            $table->integer('total_pay');
            
            $table->unsignedBigInteger('id_guest');
            $table->unsignedBigInteger('id_room');

            $table->foreign('id_guest')->references('id_guest')->on('guests');
            $table->foreign('id_room')->references('id_room')->on('rooms');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
