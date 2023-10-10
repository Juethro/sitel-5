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
            
            $table->enum('id_guest', ['1', '2', '3']);
            $table->enum('id_room', ['1', '2', '3']);

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
