<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function enregistrer(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'numero' => 'required',
        ]);

        $contact = new Contact([
            'nom' => $request->input('nom'),
            'numero' => $request->input('numero'),
        ]);

        $contact->save();

        return redirect()->back()->with('C/est bon salut');
}
}
