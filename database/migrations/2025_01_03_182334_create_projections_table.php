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
        Schema::create('projections', function (Blueprint $table) {
            $table->id();
            $table->date('date'); // Date de la projection
            $table->time('heure'); // Heure de la projection
            $table->string('lieu'); // Lieu de la projection
            $table->unsignedBigInteger('code_film'); // FK vers films
            $table->string('image')->nullable(); // Chemin de l'image
            $table->timestamps();

            // Clé étrangère vers la table films
            $table->foreign('code_film')->references('id')->on('films')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projections');
    }
};
