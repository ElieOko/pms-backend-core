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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->integer("parent_space_id")->default(1);
            $table->foreignId('branch_id')->nullable()->index();
            $table->foreignId('client_id')->nullable()->index();
            $table->foreignId('room_id')->nullable()->index();
            $table->foreignId('bed_room_id')->nullable()->index();
            $table->date('start_date')->nullable(); // Date de début
            $table->date('end_date')->nullable();   // Date de fin
            $table->integer('status')->default(0);  // Status (0, 1, 2)

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};