<?php

use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use App\Models\UserAuthenticate;
use App\Http\Controllers\UserAuthenticateController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/platform', function () {
    if(session()->has('usuario_id')){

        return view('platform');

   }else{

    return view('login');
   }
})->name('platform.page');




Route::get('/auth/redirect', function () {
     return Socialite::driver('github')->redirect();
});
Route::get('/auth/login', [UserAuthenticateController::class, 'auth']);
Route::get('/auth/callback', function () {
     $githubUser = Socialite::driver('github')->user();

     $githubUserData = array(
        "name"=> $githubUser->name,
        "email"=>$githubUser->email,
        "github_id"=> $githubUser->id,
        "github_token"=> $githubUser->token,
        "github_refresh_token" => $githubUser->refreshToken,
     );

     $user = User::createUser($githubUserData);

     session()->put('usuario_id', $user->id);

     return redirect()->route('platform.page');

});
