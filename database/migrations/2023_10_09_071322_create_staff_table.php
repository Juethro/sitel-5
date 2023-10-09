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
        Schema::create('staff', function (Blueprint $table) {
            $table->id('id_staff');
            $table->string('staff_name',30);
            $table->string('staff_address');
            $table->string('phone_number');
            $table->unsignedBigInteger('id_department');
            $table->foreign('id_department')->references('id_department')->on('departments');
            $table->string('position');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('staff');
    }
};
