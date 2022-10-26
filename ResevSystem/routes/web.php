<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

Route::get('/users',[UserController::class, 'index']);
Route::get('/users/create',[UserController::class, 'create']);
Route::get('/users/{id}',[UserController::class, 'show']);
Route::post('/users',[UserController::class, 'store']);

// Route::get('/saludo', function () {
//     return "hello";
// });

// Route::get('/saludo/{saludo}', function ($saludo) {
//     return "Hello ".$saludo;
// });

// Route::get('/saludo/{num1}/{num2}', function ($num1, $num2) {
//     return "hello".$num1+$num2;
// })-> where(['num1' => 'num1', 'num2' => '[0-9]']);

// Route::get('/saludo/{num1}/{num2}/{num3?}', function ($num1, $num2, $num3){
//     return $num1*$num2*$num3;
// });
