<?php

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

Route::get('/' , function () {
    if (Auth::check()) {
        return view('welcome');
    } else {
        return view('auth/login');
    }
    
});


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/user' , function () {
    $user = Auth::user();
    echo "Bem vindo :  $user->name - $user->id - $user->admin";
});

Route::get('/panel', function() {
    echo "Bem vindo Administrado";
})->middleware('required-admin');


