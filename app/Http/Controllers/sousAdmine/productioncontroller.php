<?php

namespace App\Http\Controllers\sousAdmine;

use App\Http\Controllers\Controller;
use App\Models\projection;
use App\Models\projections;
use Illuminate\Http\Request;

class productioncontroller extends Controller
{
    public function respopro(){
        return view('sousAdmin.production');
    }
    public function respoprod()
    {
        $projections = projections::all(); // Récupère toutes les projections
        return view('sousAdmin.production', compact('projections'));
    }

}
