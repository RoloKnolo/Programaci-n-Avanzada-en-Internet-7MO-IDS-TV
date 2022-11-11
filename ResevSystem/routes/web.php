<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ClientController;
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
/*
;
//primero se define el nombre de la ruta
Route::get('/saludo', function () {
    return "Puto sierra";
});

Route::get('/saludo/{name}', function ($name) {
    return "Hola ".$name;
});

Route::get('/suma/{num1}/{num2}', function ($num1,$num2) {
    return $num1 + $num2;
})->where(['num1' ,'[0-9]+'],['num2' ,'[0-9]+']);

//opcionales ?
Route::get('/multi/{num1}/{num2}/{num3?}', function ($num1, $num2, $num3 = 1) {
    return $num1*$num2*$num3;
});*/
Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', function () {
    return view('auth.login');
})->name('login');
Route::get('/home', function () {
    return view('auth.home');
})->name('home');
//Los middleware tambien nos sirven para administrar las vistas de los usuarios dependiendo del rol
Route::middleware(['auth'])->group(function () {
    Route::get('/users', [UserController::class, 'index']);//Index sirve para consultar los registros

    Route::get('/users/create',[UserController::class, 'create']);

    Route::get('/users/{id}',[UserController::class, 'show']);

    //store es donde se envian los forms
    Route::post('/users', [UserController::class,'store']);

    Route::put('/users', [UserController::class,'update']);

    Route::get('/clients', [ClientController::class, 'index']);//Index sirve para consultar los registros

    Route::get('/clients/create',[ClientController::class, 'create']);

    Route::get('/clients/{id}',[ClientController::class, 'show']);

    //store es donde se envian los forms
    Route::post('/clients', [ClientController::class,'store']);

});



