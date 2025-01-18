<?php

namespace App\Http\Controllers;

use App\Models\projections;
use Illuminate\Http\Request;

class planningcontroller extends Controller
{
    public function planning(){
       return view('film');
    }

    public function element()
    {
        // Récupérer toutes les projections avec les films associés
        $projections = projections::with('projections')->get();

        // Passer les projections à la vue
        return view('film', compact('projections'));
    }
}
