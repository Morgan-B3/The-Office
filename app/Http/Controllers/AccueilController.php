<?php

namespace App\Http\Controllers;

use App\Models\Utilisateur;
use App\Models\Salle;

class AccueilController extends Controller
{
    public function index()
    {
        $utilisateurs = Utilisateur::all();
        $salles = Salle::inRandomOrder()->limit(4)->get();

        return view('accueil', compact('utilisateurs', 'salles'));
    }
}
