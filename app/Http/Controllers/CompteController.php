<?php

namespace App\Http\Controllers;

use App\Models\Utilisateur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Session\Session;

class CompteController extends Controller
{
    public function acceuil()
    {
        // var_dump(auth()->guest());
        // if(auth()->guest())
        // {
        //     return redirect('/login')->withErrors([
        //         'email' => 'vous devez être connetez '
        //     ]);
        // }

        // $userinfo = DB::table('utilisateurs')->select('nom','prenom')->where('id',auth()->id())->get();
        // $userinfo = $userinfo[0];
    //    dump( session('nom',$userinfo->nom));
        // session('prenom',$userinfo->prenom);
    //   dump(  $a=session()->get('id'));
        return view('comptelayout',[
            // 'userinfo'=> $userinfo
        ]); 
    }
    

    public function deconnexion()
    {
        auth()->logout();
        return redirect('/');
    }

    
    // public function mypost()
    // {
    //     if(auth()->guest())
    //     {
    //         return redirect('/login')->withErrors([
    //             'email' => 'vous devez être connetez '
    //         ]);
    //     }
    //     return view('mypost',[
            
    //     ]);
    // }

   
}
