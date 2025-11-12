<?php

namespace App\Http\Controllers;

use App\Models\projections;
use Illuminate\Http\Request;

class singlecontroller extends Controller
{
   public function app(){
    return view('single');
   }
   public function index()
   {
       // Get all projections with their related films
       $projections = Projections::with('film')->get();

       // Pass projections to the view
       return view('single', compact('projections'));
   }

   public function show($id)
   {
       // Get the projection with the film using the given ID
       $projection = Projections::with('film')->findOrFail($id);

       // Pass the projection to the view
       return view('single', compact('projection'));
   }
}
