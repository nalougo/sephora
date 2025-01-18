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
        Schema::create('films', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->date('date');
            $table->text('sujet');
            $table->unsignedBigInteger('code_realisateur'); // Clé étrangère vers réalisateurs
            $table->unsignedBigInteger('code_producteur');
            $table->timestamps();

            // Contraintes de clé étrangère
            $table->foreign('code_realisateur')
                  ->references('id')->on('realisateurs')
                  ->onDelete('cascade');

            $table->foreign('code_producteur')
                  ->references('id')->on('producteurs')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('films');
    }
};
