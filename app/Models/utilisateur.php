<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class utilisateur extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'prenom',
        'nom_utilisateur',
        'email',
        'password',
        'role',
    ];

    // Champs à masquer lors de la récupération de l'utilisateur
    protected $hidden = [
        'password',
    ];

    // Spécifie que le champ 'nom_utilisateur' doit être utilisé pour l'authentification
    public function getAuthIdentifierName()
    {
        return 'nom_utilisateur';
    }

 

}
