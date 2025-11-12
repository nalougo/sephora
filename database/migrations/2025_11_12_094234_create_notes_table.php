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
        Schema::create('notes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('utilisateur_id'); // FK vers users (membre du jury)
            $table->unsignedBigInteger('projection_id'); // FK vers projections
            $table->decimal('note'); // Note (ex: 8.50 sur 10 ou 20)
            $table->text('commentaire')->nullable(); // Commentaire optionnel
            $table->timestamps();

            // Clés étrangères
            $table->foreign('user_id')->references('id')->on('utilisateurs')->onDelete('cascade');
            $table->foreign('projection_id')->references('id')->on('projections')->onDelete('cascade');

            // Contrainte unique : un jury ne peut noter qu'une seule fois la même projection
            $table->unique(['user_id', 'projection_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notes');
    }
};
