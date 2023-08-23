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
        Schema::create('compagnie_ville', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('iDcompagnie');
            $table->foreign('iDcompagnie')->references('id')->on('compagnies');
            $table->unsignedBigInteger('iDville');
            $table->foreign('iDville')->references('id')->on('villes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('compagnie_ville');
    }
};
