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

Route::get('/', 'PagesController@getHome');
    // ao invés de passar uma função passo uma string com o nome da case controller @nomeDoMetodo a ser executado

Route::get('/clientes/{pos}', 'PagesController@getClientes');

Route::get('/contatos','PagesController@getContatos');
