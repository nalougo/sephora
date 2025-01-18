<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Models\films;
use App\Models\Projection;
use App\Models\projections;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function pont()
    {
        // Code pour cette méthode, par exemple :
        return view('pages/test');
    }

    public function pon()
    {
        // Récupère tous les films
        $films = films::all();

        // Passe la variable $films à la vue
        return view('pages.test', compact('films'));
    }

    // Enregistrer une projection
    public function store(Request $request)
    {
        // Valider les données
        $validated = $request->validate([
            'code_film' => 'required|exists:films,id',
            'date' => 'required|date',
            'heure' => 'required',
            'lieu' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Ajouter une projection
        $projection = new Projections();
        $projection->code_film = $validated['code_film'];
        $projection->date = $validated['date'];
        $projection->heure = $validated['heure'];
        $projection->lieu = $validated['lieu'];

        if ($request->hasFile('image')) {
            $projection->image = $request->file('image')->store('images', 'public');
        }

        $projection->save();

        return redirect()->route('production')->with('success', 'Projection ajoutée avec succès.');
    }
    public function index()
    {
        // Récupère toutes les projections et charge les films associés (avec 'film' si besoin)
        $projections = Projections::with('film')->get();

        // Passe les projections à la vue
        return view('sousAdmin.production', compact('projections'));
    }

    // Méthode pour supprimer une projection
    public function destroy($id)
    {
        // Trouver la projection par son ID
        $projection = Projections::findOrFail($id);

        // Supprime la projection
        $projection->delete();

        // Redirige avec un message de succès
        return redirect()->route('production')->with('success', 'Projection supprimée avec succès!');
    }
    
}
