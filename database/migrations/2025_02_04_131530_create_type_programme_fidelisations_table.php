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
        Schema::create('type_programme_fidelisations', function (Blueprint $table) {
            $table->id();
            $table->integer("parent_space_id")->default(1);
            $table->foreignId('branch_id')->nullable()->index();
            $table->string("nom");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('type_programme_fidelisations');
    }
};
