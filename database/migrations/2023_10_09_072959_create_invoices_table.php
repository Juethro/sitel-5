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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id('id_invoice');
            
            $table->string('room_type');
            $table->date('start_date');
            $table->date('finish_date');
            $table->string('pay_type');
            $table->decimal('total', 10, 2);
            $table->date('pay_date');

            $table->unsignedBigInteger('id_guest');
            $table->unsignedBigInteger('id_roomtype');
            $table->foreign('id_guest')->references('id_guest')->on('guests');
            $table->foreign('id_roomtype')->references('id_roomtype')->on('roomtypes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
