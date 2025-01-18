<?php

namespace App\Http\Controllers\sousAdmine;

use App\Http\Controllers\Controller;
use App\Models\utilisateur;
use Illuminate\Http\Request;

class sousAdminecontroller extends Controller
{
    public function sousAd(){
        return view('sousAdmin/sousAdmine');
    }

    public function afficherUtilisateurs()
{
    $utilisateurs = utilisateur::whereIn('role', [
        'responsable_production',
        'responsable_inspection',
        'president_jury',
        'administrateur'
    ])->get();

    return view('sousAdmin/sousAdmine', compact('utilisateurs'));
}
public function destroy($id)
{
    $utilisateur = Utilisateur::findOrFail($id);
    $utilisateur->delete();

    return redirect()->back()->with('success', 'Utilisateur supprimé avec succès.');
}

}
