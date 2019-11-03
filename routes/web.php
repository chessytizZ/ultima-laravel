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
Route::get('/home', function () {
    return view('inicio');
});

Route::get('/tareados', 'TareadosController@create')->name('tareados');
Route::get('/video/{id}', 'VideoController@individual')->name('video');
Route::get('/post/{id}', 'PostController@individual')->name('post');

