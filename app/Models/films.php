<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class films extends Model
{
    // Dans le modèle Film
    public function realisateur()
    {
        return $this->belongsTo(Realisateurs::class, 'code_realisateur');
    }

    public function producteur()
    {
        return $this->belongsTo(Producteurs::class, 'code_producteur');
    }

    // Ajoutez 'titre' au tableau $fillable
    protected $fillable = ['titre', 'date', 'sujet', 'code_realisateur', 'code_producteur'];

    // Autres méthodes du modèle...

}
