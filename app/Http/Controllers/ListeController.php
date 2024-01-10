<?php

namespace App\Http\Controllers;

use App\Models\Salle;
use Illuminate\Http\Request;

class ListeController extends Controller
{
    public function index ()
    {
        return view('listeSalles' ,[
            'salles' => Salle::all(),
        ]);
    }

    public function show($id)
    {
        $salle = Salle::findOrFail($id); 

        return view('show', ['salle' => $salle]);
    }

  

}
