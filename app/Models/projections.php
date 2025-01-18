<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class projections extends Model
{
    public function film()
    {
        return $this->belongsTo(films::class, 'code_film');
    }

    // Ajoutez 'titre' au tableau $fillable
    protected $fillable = ['date', 'heure', 'lieu', 'code_film','image','titre'];

    // Autres méthodes du modèle...


    public function projections()
    {
        return $this->hasMany(projections::class, 'code_film');
    }
}
