<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\utilisateur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash; // Pour hacher les mots de passe
use Illuminate\Support\Facades\Auth; // Pour gérer l'authentification

class registercontroller extends Controller
{
    public function showRegistrationForm()
    {
        return view('pages.inscription');
    }

    public function register(Request $request)
    {
        // Validation des données
        $validated = $request->validate([
            'nom' => ['required', 'string', 'between:3,15'],
            'prenom' => ['required', 'string', 'between:3,15'],
            'nom_utilisateur' => ['required', 'string', 'between:3,15', 'unique:utilisateurs'],
            'email' => ['required', 'email', 'unique:utilisateurs'],
            'password' => ['required', 'string', 'min:5', 'confirmed'],
        ]);

        // Création de l'utilisateur
        $validated['password'] = Hash::make($validated['password']);
        $user = utilisateur::create($validated);


        // Connexion automatique de l'utilisateur (si nécessaire)
        Auth::login($user);

        // In register method
        return redirect()->route('index')->with('success', 'Inscription réussie !');
    }
}
