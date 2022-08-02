<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class ConnexionController extends Controller
{
    public function formulaire()
    {
        return view('login'); 
    }

    public function traitement()
    {
        request()->validate([
            'email' => ['required','email'],
            'password' => ['required']
        ]);

        $resultat = auth()->attempt([
            'email' => request('email'),
            'password' => request('password')
        ]);
        
        if($resultat)
        {
            $userinfo = DB::table('utilisateurs')->select('nom','prenom','email','profile_image')->where('id',auth()->id())->get();
            $userinfo = $userinfo[0];
            $nomuser = $userinfo->nom;
            $prenomuser =$userinfo->prenom;
            $img = $userinfo->profile_image;
            $email = $userinfo->email;
            session([
                'name' => $nomuser,
                'prename'=>$prenomuser,
                'mail'=>$email,
                'avatar'=>$img,
                ]);

            return redirect(route('mypost'));
            
            // dump(Session::get('name'));
        }
        
        return back()->withInput()->withErrors([
            'email' => 'Vos identifiants sont incorrects' 
        ]);
    }

    public  function publicPost(){
        $posts = DB::table('posts')
                        ->limit(10)
                        ->where('status',1)
                        ->get();
        // dump($posts);
        return view('index',[
            'posts'=>$posts,
        ]);
    }
}
