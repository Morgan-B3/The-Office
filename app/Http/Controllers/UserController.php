<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function create()
    {
        return view('inscription');
    }

    public function register(Request $request)
    {
        $request->validate([
            'email' => 'email|required',
            'password' => 'required|min:8',
            'password_confirm' => 'required|same:password'
        ]);

        $user = new User();
        $user->email = $request->email;
        $user->password = $request->password;
        $user->name = Str::before($request->email, '@');
        $user->save();

        return redirect('listeSalles')->with('message', "L'utilisateur a été ajouté." );
    }

    public function login()
    {
        return view('connexion');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/listeSalles');
        }

        return back()->withErrors([
            'email' => 'Identifiants incorrects.',
        ])->onlyInput('email');
    }
}
