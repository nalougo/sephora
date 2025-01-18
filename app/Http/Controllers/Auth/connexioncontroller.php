<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;


class connexioncontroller extends Controller
{
    public function pageconnexion()
    {
        return view('pages/connexion');
    }


    public function login(Request $request)
    {
        // Validation des champs
        $ok=$request->validate([
            'nom_utilisateur' => ['required' , 'string'],
            'password' => ['required' , 'string'],
        ]);

        // Tentative de connexion
        if (Auth::attempt($ok)) {
            // Si la connexion réussit
            $request->session()->regenerate();
            // In login method
            return redirect()->route('index'); // Redirect to the index route
        }

        // En cas d'échec
         return back()->withErrors([
            'nom_utilisateur' => 'Les informations d’identification sont incorrectes.',
        ])->onlyInput('nom_utilisateur');
    }
}
