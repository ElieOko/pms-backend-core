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
            $table->id();
            $table->integer("parent_space_id")->default(1);
            $table->foreignId('branch_id')->nullable()->index();
            $table->string("number_room")->default("AB-12");
            $table->string("capacite")->default("");
            $table->integer("tarif_base")->default(10);
            $table->integer("promotion_tarif")->nullable()->default(10);
            $table->boolean("is_reserve")->default(false);
            $table->timestamps();
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
