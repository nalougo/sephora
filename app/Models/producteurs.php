<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class producteurs extends Model

{
    protected $fillable = ['nom', 'prenom', 'date_naiss']; // Spécifie les champs que tu souhaites pouvoir remplir en masse
    
}


