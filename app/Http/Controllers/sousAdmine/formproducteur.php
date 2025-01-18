<?php

namespace App\Http\Controllers\sousAdmine;

use App\Http\Controllers\Controller;
use App\Models\Producteur;
use App\Models\producteurs;
use Illuminate\Http\Request;

class FormProducteur extends Controller
{
    public function producteur()
    {
        return view('sousAdmin.formproducteur');
    }

/*    public function inspection()
    {
        $producteurs = producteurs::all(); // Récupère tous les producteurs
        return view('sousAdmin.inspection', compact('producteurs'));
    }*/

    public function destroy($id)
    {
    // Trouver le producteur par ID et le supprimer
    $producteur = Producteurs::find($id); // Utiliser le bon modèle

    if ($producteur) {
        $producteur->delete();
        return redirect()->route('producteurs.inspection')->with('success', 'Producteur supprimé avec succès.');
    }

    return redirect()->route('inspection')->with('error', 'Producteur introuvable.');
    }


    public function store(Request $request)
    {
        // Validation des données
        $validated = $request->validate([
            'nom' => 'required|max:255',
            'prenom' => 'required|max:255',
            'date_naissance' => 'required|date',
        ]);

        // Enregistrement dans la base de données
        producteurs::create([
            'nom' => $validated['nom'],
            'prenom' => $validated['prenom'],
            'date_naiss' => $validated['date_naissance'],
        ]);

        // Redirection avec un message de succès
        return redirect()->route('inspection')->with('success', 'Producteur ajouté avec succès!');
    }
}

