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
        Schema::create('programme_fidelisation_clients', function (Blueprint $table) {
            $table->id();
            $table->integer("parent_space_id")->default(1);
            $table->foreignId('branch_id')->nullable()->index();
            $table->foreignId('badge_id')->nullable()->index();
            $table->foreignId('client_id')->nullable()->index();
            $table->integer("points_utilise")->default(0);
            $table->integer("points_disponible")->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('programme_fidelisation_clients');
    }
};
