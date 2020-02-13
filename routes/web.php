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

Route::get('/', function () {
    return view('welcome');
});
Route::resource('usuarios','PagesController')->middleware('edad');
Route::resource('posts','PostsController');
Route::resource('contact','contactController');

Route::get('/home', function(){
    return 'Si ves esta página eres mayor de edad';
})->middleware('edad');

Route::get('/auth.login', function(){
    return 'Formulario para iniciar sesion';
})->name('auth.login');