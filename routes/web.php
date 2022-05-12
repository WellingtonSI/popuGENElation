<?php

use Illuminate\Support\Facades\Route;

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
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});


Route::group(['prefix' => 'equilibrio'], function () {
    Route::get('/atualizar-mapa', ['uses' => 'EquilibrioController@atualizar_mapa']);
    Route::get('/todas-geracoes/atualizar-mapa', ['uses' => 'EquilibrioController@atualizar_mapa']);
    Route::get('/todas-geracoes', ['uses' => 'EquilibrioController@todas_geracoes']);
    Route::get('/por-geracao', ['uses' => 'EquilibrioController@por_geracao']);
});
Route::get('sexo/atualizar-mapa', ['uses' => 'SexoController@atualizar_mapa']);

Route::group(['prefix' => 'selecao'], function () {
    Route::get('/completa', ['uses' => 'SelecaoController@completo']);
    Route::get('/completa/contra-dominante', ['uses' => 'SelecaoController@contra_dominante']);
    Route::get('/completa/contra-recessivo-parcial', ['uses' => 'SelecaoController@contra_recessivo_parcial']);
    Route::get('/completa/contra-recessivo-completo', ['uses' => 'SelecaoController@contra_recessivo_completo']);
});

Route::resource('equilibrio ', 'EquilibrioController');
Route::resource('sexo', 'SexoController');
Route::resource('polialelia', 'PolialeliaController');
Route::resource('poliploidia', 'PoliploidiaController');
Route::resource('selecao', 'SelecaoController');



