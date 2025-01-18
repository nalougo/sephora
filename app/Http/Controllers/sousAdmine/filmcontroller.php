<?php

namespace App\Http\Controllers\sousAdmine;

use App\Http\Controllers\Controller;
use App\Models\films;
use App\Models\producteurs;
use App\Models\realisateurs;
use Illuminate\Http\Request;

class filmcontroller extends Controller
{
    public function film(){
        return view('sousAdmin.formfilm');
    }
    public function pointe()
    {
        $realisateurs = realisateurs::all();
        $producteurs = producteurs::all();
        return view('sousAdmin.formfilm', compact('realisateurs', 'producteurs'));
    }


    public function destroy($id)
    {
        // Trouver le film par son code_film (ou son ID) et le supprimer
        $film = Films::find($id); // Utilisez la clé primaire appropriée (généralement 'id' ou 'code_film')

        if ($film) {
            $film->delete();
            return redirect()->route('inspection')->with('success', 'Film supprimé avec succès.');
        }

        // Si le film n'existe pas, rediriger avec un message d'erreur
        return redirect()->route('inspection')->with('error', 'Film introuvable.');
    }



    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required|string|max:255',
            'date' => 'required|date',
            'sujet' => 'required|string|max:255',
            'code_realisateur' => 'required|exists:realisateurs,id',
            'code_producteur' => 'required|exists:producteurs,id',
        ]);

        films::create([
            'titre' => $request->input('titre'),
            'date' => $request->input('date'),
            'sujet' => $request->input('sujet'),
            'code_realisateur' => $request->input('code_realisateur'),
            'code_producteur' => $request->input('code_producteur'),
        ]);

        return redirect()->route('inspection')->with('success', 'Film ajouté avec succès');
    }
}
