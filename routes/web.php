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
Route::get('/logout', 'LoginController@logout')->name('logout');

Route::get('/cadastro_usuario', 'Cadastro_usuarioController@cadastro_usuario')->name('cadastro_usuario');
Route::get('/cadastrar_plano', 'Cadastro_usuarioController@cadastrar_plano')->name('cadastro_usuario.cadastrar_plano');
Route::get('/cadastro_cartao', 'Cadastro_usuarioController@cadastro_cartao')->name('cadastro_usuario.cadastro_cartao');
Route::post('/cadastrar', 'Cadastro_usuarioController@cadastrar')->name('cadastrar');

Route::get('/cadastrar_plano', 'Cadastrar_planoController@cadastrar_plano');
Route::get('/plano', 'Cadastrar_planoController@plano')->name('plano');

Route::group(['prefix' => 'filmes', 'middleware' => ['login']], function () {
    Route::get('/', 'FilmeController@listar')->name('filmes.listar');
    Route::get('/novo', 'FilmeController@novo')->name('filmes.novo');
    Route::get('/visualizar/{id}', 'FilmeController@visualizar')->name('filmes.visualizar'); 
    Route::get('/editar/{id}', 'FilmeController@editar')->name('filmes.editar');
    Route::get('/excluir/{id}', 'FilmeController@excluir')->name('filmes.excluir');  
    
    
});

Route::get('/conteudo', 'ConteudoController@conteudo')->name('conteudo');
Route::get('/assistir', 'ConteudoController@assistir')->name('conteudo.assistir');
