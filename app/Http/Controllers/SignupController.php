<?php

namespace App\Http\Controllers;



use App\Models\Utilisateur;
use Illuminate\Http\Request;

class SignupController extends Controller
{
   public function formulaire()
   {
        return view('signup');
   }

   public function traitement()
   {
        request()->validate([
            'nom'=>['required','string'],
            'prenom'=>['required','string'],
            'email' => ['required','email'],
            'password' => ['required','confirmed','min:8'],
            'password_confirmation' => ['required']
        ]);

        $user = Utilisateur::create([
            'nom' => request('nom'),
            'prenom' => request('prenom'),
            'email' => request('email'),
            'mot_de_passe' => bcrypt(request('password'))
        ]);
        return view('login');
   }
}
