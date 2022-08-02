<?php

use App\Models\Utilisateur;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompteController;
use App\Http\Controllers\MypostController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\NewpostController;
use App\Http\Controllers\ConnexionController;
use App\Http\Controllers\ProfilController;
use App\Http\Middleware\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/utilisa', function(){
    $utilisateurs = Utilisateur::all();

    return view('utilisateur',[
        'utilisateurs'=>$utilisateurs,
    ]);
});


Route::group([
    'middleware'=> Auth::class,
], function(){

    Route::get('/mon-compte',[CompteController::class,'acceuil']);


    Route::get('/profil',[ProfilController::class,'profil'])->name('profilcard');

    Route::get('/modify-profil-photo',[ProfilController::class,'modifyProfilPhotoPage'])->name('modifyAvatarPage');
    Route::post('/modify-profil-photo',[ProfilController::class,'modifyProfilPhoto'])->name('modifyAvatar');


    Route::get('/modify-profil-info',[ProfilController::class,'modifyProfilInfoPage'])->name('profilInfo');
    Route::post('/modify-profil-info',[ProfilController::class,'modifyProfilInfo']);

    Route::get('/modify-mail',[ProfilController::class,'modifyEmailPage'])->name('mailChanged');
    Route::post('/modify-mail',[ProfilController::class,'modifyEmail'])->name('mailChanged');

    Route::get('/setting',[ProfilController::class,'modifyPassword'])->name('modifyPassword');
    Route::post('/setting-pwd',[ProfilController::class,'changePwd'])->name('modifyPassword1');

    Route::get('/new-post',[NewpostController::class,'newpost']);
    Route::post('/new-post',[NewpostController::class,'traitement']);

    Route::get('/my-posts',[MypostController::class,'mypost'])->name('mypost');

});



// Route::view('/','index');
Route::get('/',[ConnexionController::class,'publicPost']);

Route::get('/signup',[SignupController::class,'formulaire']);
Route::post('/signup',[SignupController::class,'traitement']);

Route::get('/login',[ConnexionController::class,'formulaire']);
Route::post('/login',[ConnexionController::class,'traitement']);

// Route::get('/mon-compte',[CompteController::class,'acceuil']);
Route::get('/deconnexion',[CompteController::class,'deconnexion']);










// Route::post('/post',[NewpostController::class,'new']);