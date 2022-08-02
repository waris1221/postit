<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class ProfilController extends Controller
{
    public function profil(){
        // if(auth()->guest())
        // {
        //     return redirect('/login')->withErrors([
        //         'email' => 'vous devez être connetez '
        //     ]);
        // }
        return view('profilcard');
    }

    public function modifyProfilInfoPage(){
      
        return view('modifyprofilinfo');
    }


    public function modifyProfilInfo(){
       

        request()->validate([
            'nom'=>['required'],
            'prenom'=>['required'],
            // 'email'=>['email','unique:App\Models\Utilisateur,email']
        ]);
        // dump(auth()->user());
        // $user= auth()->user();
        // $user->nom=request('nom');
        // $user->prenom= request('prenom');
        // $user->email= request('email');
        // dump($user->save());
        // dump(auth()->user()->update([
        //     'nm'=>request('nom'),
        //     'prenom'=>request('prenom'),
        //     'email'=>request('email')
        // ]));
            
        DB::table('utilisateurs')
                            ->where('id',auth()->id())
                            ->update([
                                'nom'=>request('nom'),
                                'prenom'=>request('prenom'),
                                // 'email'=>request('email')
                            ]);
        $userinfo = DB::table('utilisateurs')->select('nom','prenom')->where('id',auth()->id())->get();
        $userinfo = $userinfo[0];
        $nomuser = $userinfo->nom;
        $prenomuser =$userinfo->prenom;
        session([
            'name' => $nomuser,
            'prename'=>$prenomuser,
            ]);

        // dump(Session::all());
        // session(['prename'=>'walle']);


        return redirect(route('mypost'));
        
    }

    public function modifyProfilPhotopage(){
        return view('modifyprofilphoto');
    }

    public function modifyProfilPhoto(){
        request()->validate([
            'avatar'=>['required','image',],
        ]);

        // $path = request('avatar')->store('avatars');
        $path = Storage::disk('public')->put('avatars',request('avatar'));
        DB::table('utilisateurs')
                            ->where('id',auth()->id())
                            ->update([
                                'profile_image'=>$path,
                                // 'prenom'=>request('prenom'),
                                // 'email'=>request('email')
                            ]);
        // return $path;

        $userinfo = DB::table('utilisateurs')->select('profile_image')->where('id',auth()->id())->get();
        $userinfo = $userinfo[0];
        $img = $userinfo->profile_image;


        session([
            // 'avatar' => '{{URL::asset(\''.$img.'\')}}',
            'avatar'=>$img,
            ]);

    //   dump(Session::get('avatar'));
    //   {{URL::asset('images/dog.jpg')}}

    return redirect(route('profilcard'));
    

    }

    public function modifyPassword(){   
        return view('modifypassword');
    }


    public function modifyEmailPage(){
        return view('modifymail');
    }

    public function modifyEmail(){
        
        request()->validate([
            'email'=>['required','email','unique:App\Models\Utilisateur,email'],
        ]);

        DB::table('utilisateurs')
                            ->where('id',auth()->id())
                            ->update([
                                'email'=>request('email')
                            ]);

        $userinfo = DB::table('utilisateurs')->select('email')->where('id',auth()->id())->get();
        $userinfo = $userinfo[0];
        $email = $userinfo->email;
        session([
            'mail'=>$email
            ]);
        return redirect(route('mypost'));                    
    }

    public function changePwd(){
        // 

        request()->validate([
            'password' => ['required','confirmed','min:8'],
            'password_confirmation' => ['required']
        ]);

        DB::table('utilisateurs')
                            ->where('id',auth()->id())
                            ->update([
                                'mot_de_passe'=>bcrypt(request('password'))
                            ]);


        // auth()->user()->update([
        //     'mot_de_passe'=>bcrypt(request('password')), 
        // ]);

        return redirect('/my-posts');

    }
}
