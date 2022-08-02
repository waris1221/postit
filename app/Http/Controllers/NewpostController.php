<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;

class NewpostController extends Controller
{

    public function newpost()
    {
        return view('newpost');
    }
    
    public function traitement()
    {
        // if(auth()->guest())
        // {
        //     return redirect('/login')->withErrors([
        //         'email' => 'vous devez être connetez '
        //     ]);
        // }

        request()->validate([
            'message'=>['required'],
            'auteur'=>['required']
        ]);
        $a = request('public');
        if(isset($a)){
            $b= true;
        }else{
            $b=false;
        }
        Posts::create([
            'utilisateurs_id'=>auth()->id(),
            'contenu'=>request('message'),
            'auteurs'=> request('auteur'),
            'status'=>$b,
        ]);

        return back();
    }
}
