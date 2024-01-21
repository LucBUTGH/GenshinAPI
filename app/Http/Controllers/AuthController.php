<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash; // Assurez-vous d'importer la classe Hash

class AuthController extends Controller
{
    function register(){
        return view('register');
    }

    function insert(Request $request){
        $datas = $request->validate([
            'username' => 'required',
            'name' => 'required',
            'firstname' => 'required',
            'email' => 'required|email',
            'password' => 'required',   
        ]);

        $user = new User;
        $user->US_USERNAME = $request->input('username');
        $user->US_NAME = $request->input('name');
        $user->US_FIRSTNAME = $request->input('firstname');
        $user->US_MAIL = $request->input('email');
        $user->US_PASSWORD = bcrypt($request->input('password'));        
        $user->save();
        session(['user' => $user]);

        return redirect('/')->with('success', 'Inscription réussie !');
    }

    function login(){
        return view('login');
    }

    public function verif(Request $request)
{
    $user = User::where('us_mail', $request->input('email'))
                ->orWhere('us_username', $request->input('email'))
                ->first();

    if ($user) {
        $password = $user->US_PASSWORD;
    } else {
        return redirect()->route('login')->with('error', 'Email incorrect.');
    }

    if ($password && Hash::check($request->input('password'), $password)) {
        session(['user' => $user]);
        return view('homepage');
    } else {
        return redirect()->route('login')->with('error', 'Mot de passe incorrect.');
    }
}

    function logout(){
        session()->flush();
        return view('homepage');
    }
}

    

