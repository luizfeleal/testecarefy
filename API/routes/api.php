<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserAuthenticateController;
use App\Http\Controllers\PersonController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::prefix('v1')->middleware('api')->group(function(){
    Route::apiResource('/person', PersonController::class);
    Route::delete('/person', [PersonController::class, 'destroy']);
    Route::apiResource('/user', UserAuthenticateController::class);
    Route::post('/user/login', [UserAuthenticateController::class, 'login']);

//});

Route::get('teste', function() {
    return 'teste';
});
