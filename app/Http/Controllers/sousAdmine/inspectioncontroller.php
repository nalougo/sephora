<?php

namespace App\Http\Controllers\sousAdmine;

use App\Http\Controllers\Controller;
use App\Models\films;
use App\Models\producteurs;
use App\Models\realisateurs;
use Illuminate\Http\Request;

class inspectioncontroller extends Controller
{
    public function pageinspection(){
        return view('sousAdmin/inspection');
    }
    public function index()
    {
        // Récupérer tous les réalisateurs et producteurs
        $realisateurs = realisateurs::all();
        $producteurs = producteurs::all();

        $films = Films::with(['realisateur', 'producteur'])->get();

        // Passer les données à la vue
        return view('sousAdmin/inspection', compact('realisateurs', 'producteurs','films'));
    }
}
