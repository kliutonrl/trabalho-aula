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

Route::get('/', 'LoginController@login');
Route::get('/login', 'LoginController@login')->name('login');
Route::post('/logar', 'LoginController@logar')->name('logar');
Route::get('/logout', 'LoginController@logout');

Route::get('/cadastro1', 'Cadastro1Controller@cadastro1');
Route::get('/cadastro', 'Cadastro1Controller@cadastro');
Route::post('/cadastrar', 'Cadastro1Controller@cadastrar');

Route::get('/cadastro2', 'Cadastro2Controller@cadastro2');
Route::get('/plano', 'Cadastro2Controller@plano');

Route::get('/conteudo', 'ConteudoController@conteudo')->name('conteudo');
