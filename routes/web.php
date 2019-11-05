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

// Route::get('/', function () {
//     $genero= App\Genero::find(2);
//     return $genero->posts;
// });
Route::get('/', function () {
    return view('welcome');
});
Route::get('/post', function () {
    return view('formulario_post');
});
Route::get('/video', function () {
    return view('formulario_video');
});
Route::get('/genero', function () {
    return view('formulario_genero');
});
Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\LoginController@Login')->name('login');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('/register', 'Auth\RegisterController@register')->name('register');

Route::get('/inicio', 'InicioController@index')->name('inicio');
Route::get('/tareados', 'TareadosController@create')->name('tareados');
Route::get('/video/{id}', 'VideoController@individual')->name('video');
Route::get('/post/{id}', 'PostController@individual')->name('post');

