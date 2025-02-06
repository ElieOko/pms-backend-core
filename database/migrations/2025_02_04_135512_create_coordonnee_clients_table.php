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
        Schema::create('coordonnee_clients', function (Blueprint $table) {
            $table->id();
            $table->integer("parent_space_id")->default(1);
            $table->foreignId('client_id')->nullable()->index();
            $table->string("telephone")->nullable();
            $table->string("email")->nullable();
            $table->string("adresse")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coordonnee_clients');
    }
};
