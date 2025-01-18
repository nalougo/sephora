<?php

namespace App\Http\Controllers\sousAdmine;

use App\Http\Controllers\Controller;
use App\Models\Realisateur;  // Utiliser le modèle Realisateur (singulier)
use App\Models\realisateurs;
use Illuminate\Http\Request;

class formrealisateur extends Controller
{
    public function formrea(){
        return view('sousAdmin.formRealisateur');
    }

    // Récupérer les réalisateurs
/*    public function inspection()
    {
        $realisateurs = realisateurs::all();  // Utiliser le modèle Realisateur
        return view('sousAdmin.inspection', compact('realisateurs'));
    }*/

    // Supprimer un réalisateur
    public function destroy($id)
    {
        $realisateur = realisateurs::find($id);  // Utiliser le modèle Realisateur

        if ($realisateur) {
            $realisateur->delete();
            return redirect()->route('inspection')->with('success', 'Réalisateur supprimé avec succès');
        }

        return redirect()->route('inspection')->with('error', 'Réalisateur introuvable');
    }

    // Ajouter un nouveau réalisateur
    public function store(Request $request)
    {
        // Validation des données
        $validated = $request->validate([
            'nom' => 'required|max:255',
            'prenom' => 'required|max:255',
            'date_naissance' => 'required|date',
        ]);

        // Enregistrement du nouveau réalisateur
        realisateurs::create([  // Utiliser le modèle Realisateur
            'nom' => $validated['nom'],
            'prenom' => $validated['prenom'],
            'date_naiss' => $validated['date_naissance'],
        ]);

        return redirect()->route('inspection')->with('success', 'Réalisateur ajouté avec succès!');
    }
}
