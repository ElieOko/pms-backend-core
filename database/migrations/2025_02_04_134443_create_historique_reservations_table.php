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
        Schema::create('historique_reservations', function (Blueprint $table) {
            $table->id();
            $table->integer("parent_space_id")->default(1);
            $table->foreignId('client_id')->nullable()->index();
            $table->foreignId('reservation_id')->nullable()->index();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('historique_reservations');
    }
};
