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






Route::get('/mensagem', 'mensagemController@index');
Route::get('/mensagem/crate', 'MensagemController@create');
Route::post('/mensagem', 'MensagemController@store');


Route::get('/mensagem/{id}', 'mensagemController@show');
Route::get('/mensagem/{id}/edit', 'MensagemController@edit');
Route::put('/mensagem/{id}', 'MensagemController@update');

Route::delete('/mensagem/{id}', 'MensagemController@destroy');


Route::get('/mensagem/create', 'MensagemController@create');

