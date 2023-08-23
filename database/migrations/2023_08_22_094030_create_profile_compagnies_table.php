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
        Schema::create('profile_compagnies', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('iDcompagnie');
            $table->foreign('iDcompagnie')->references('id')->on('compagnies')->onDelete('cascade');
            $table->string('path',255);
            $table->string('telephone',10);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profile_compagnies');
    }
};
