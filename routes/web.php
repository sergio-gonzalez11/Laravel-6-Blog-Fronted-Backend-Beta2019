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

//  Route::get('/', function () {
//      return view('home');
//  });

// Route::get('/post', function () {
//     return view('post');
// });

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
    
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/blog/buscarPostId/{id}', 'HomeController@buscarPostId');

Route::get('/categorias_id/{id}', 'HomeController@buscarPostPorCategorias');


Route::group(['middleware' => 'auth'], function () {

    Route::post('/blog/buscarPostId/{id}', 'HomeController@crearComentario')->name('blog.crearComentario');

    Route::get('/blog/show', 'PostController@index');

    Route::get('/blog/edit/{id}', 'PostController@edit')->name('blog.editar_post');

    Route::put('/blog/edit/{id}', 'PostController@update')->name('blog.update');

    Route::get('/blog/crear', 'PostController@create')->name('blog.crear');

    Route::post('/blog/crear', 'PostController@store')->name('blog.store');

    Route::delete('/blog/show/{id}', 'PostController@destroy')->name('eliminar_post');

    Route::get('/user/index/{id}', 'UserController@index');

    Route::put('/user/index/{id}', 'UserController@update')->name('actualizar_perfil');

});