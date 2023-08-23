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
            $table->unsignedBigInteger('iduser');
            $table->foreign('iduser')->references('id')->on('users');
            $table->unsignedBigInteger('idCompagnie');
            $table->foreign('idCompagnie')->references('id')->on('compagnies');
            $table->date('dateReservation');
            $table->unsignedBigInteger('iDtrajet');
            $table->foreign('iDtrajet')->references('id')->on('trajets');
            $table->integer('nbrPlace');
            $table->integer('montant');
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
