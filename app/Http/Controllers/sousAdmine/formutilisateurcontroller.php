<?php

namespace App\Http\Controllers\sousAdmine;


use App\Http\Controllers\Controller;
use App\Models\utilisateur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash; // Pour hacher les mots de passe
use Illuminate\Support\Facades\Auth;

class formutilisateurcontroller extends Controller
{
    public function utilise(){
        return view('sousAdmin/formutilisateur');
    }

    public function store(Request $request)
{
    // Validation des champs du formulaire
    $validated = $request->validate([
        'nom' => ['required', 'string', 'between:3,15'],
        'prenom' => ['required', 'string', 'between:3,15'],
        'nom_utilisateur' => ['required', 'string', 'between:3,15', 'unique:utilisateurs'],
        'email' => ['required', 'email', 'unique:utilisateurs'],
        'role' => ['required', 'string', 'in:user,responsable_inspection,responsable_production,president_jury,administrateur'],
        'password' => ['required', 'string', 'min:5', 'confirmed'],
    ]);
    // Création de l'utilisateur
    $validated['password'] = Hash::make($validated['password']);
    $user = utilisateur::create($validated);

    // Connexion automatique de l'utilisateur (si nécessaire)
    Auth::login($user);

    // Redirection avec un message de succès
    return redirect('/sousAdmine')->with('success', 'Utilisateur ajouté avec succès !');
}

}
