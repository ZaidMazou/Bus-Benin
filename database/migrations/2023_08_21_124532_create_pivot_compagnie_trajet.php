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
        Schema::create('compagnie_trajet', function (Blueprint $table) {
            $table->unsignedBigInteger('iDcompagnie');
            $table->foreign('iDcompagnie')->references('id')->on('compagnies');
            $table->time('heureDepart');
            $table->unsignedBigInteger('iDtrajet');
            $table->foreign('iDtrajet')->references('id')->on('trajets');
            $table->integer('prix');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('compagnie_trajet');
    }
};
