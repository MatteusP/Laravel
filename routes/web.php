<?php

use Illuminate\Support\Facades\Route;
use \App\Models\User;
use \Illuminate\Http\Request;
use \App\Http\Controllers\BusinessController;
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
Route::get('/request', function(Request $request){
    //após o '->' há varios comandos ex.: fullurl, path, url, header...
    $r = $request -> input(key:'keyword');
    dd($r);
    return 'x';
});

Route::get('user/{user?}', function(User $user) {
    dd($user);
    return $user;
});

Route::get('businesses', [BusinessController::class, 'index']);


/* Route::prefix('usuarios')->group(function() {
    Route::get('', function() {
        return 'usuário';
    })->name('usuarios');
    Route::get('/{id}', function() {
        return 'Mostrar detalhes';
    })->name('usuarios.show');
    Route::get('/{id}/tags', function() {
        return 'Tags do usuário';
    })->name('usuarios.tags');
});

Route::get('/a-empresa/{string?}', function ($string = null) {
    return $string;
    // return view('welcome');
})->name('a-empresa');*/

Route::get('/', function () {
    return view('welcome');
}); 