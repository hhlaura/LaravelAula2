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

Route::get('/atividades', 'AtividadeController@index');
Route::get('/atividades/{id}', 'AtividadeController@show');
Route::get('/atividades/create', 'AtividadeController@create');



Route::get('/mensagem', 'mensagemController@index');
Route::get('/mensagem/create', 'mensagemController@create');
Route::post('/mensagem', 'mensagemController@store');


Route::get('/mensagem/{id}', 'mensagemController@show');
Route::get('/mensagem/{id}/edit', 'mensagemController@edit');
Route::put('/mensagem/{id}', 'mensagemController@update');

Route::delete('/mensagem/{id}', 'mensagemController@destroy');

