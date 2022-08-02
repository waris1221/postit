<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class MypostController extends Controller
{
    public function mypost()
    {
        // if(auth()->guest())
        // {
        //     return redirect('/login')->withErrors([
        //         'email' => 'vous devez être connetez '
        //     ]);
        // }
        $posts = Posts::where('utilisateurs_id',auth()->id());
        $posts = $posts->get();
       
        
        

        // $posts= DB::table('posts')->where('utilistateurs_id',auth()->id());
            
        
        // $posts= $posts->get();
        // foreach($posts as $post)
        //     {
        //         echo $post->contenu;
        //     }

        return view('mypost',[
            'posts'=>$posts,

        ]);
            
    }
}
