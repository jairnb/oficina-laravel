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
    return view('site.home');
});


Route::get('home', 'DashboardController@index')->middleware('auth');



Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
// Route::get('material', 'MaterialController@index')->name('material.index');
// Route::get('material/create', 'MaterialController@create')->name('material.create');
// Route::post('material', 'MaterialController@store')->name('material.store');
Route::resource('material', 'MaterialController')->middleware('auth');
Route::resource('client', 'ClientController')->middleware('auth');
Route::resource('dashboard', 'DashboardController')->middleware('auth');
Route::resource('funcionario', 'FuncionarioController')->middleware('auth');
Route::resource('peca', 'PecaController')->middleware('auth');
Route::resource('servico', 'ServicoController')->middleware('auth');
Route::resource('utilizador', 'UtilizadorController')->middleware('auth');

