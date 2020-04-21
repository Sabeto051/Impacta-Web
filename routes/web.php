<?php

use Illuminate\Support\Facades\Route;

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
// El login es la pagina de inicio
Route::get('/login', function(){
    return view('login');
});

Route::get('/user', 'UserController@index');
Route::get('/corporation', 'CorporationController@index');
Route::get('/recycler', 'RecyclerController@index');
Route::get('/notification', 'NotificationController@index');
//despues cambiamos esto de abajo por el controlador que es
Route::get('/registroCorp', function(){
    return view('registroCorp');
});



