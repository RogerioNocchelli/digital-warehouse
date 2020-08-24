<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', 'HomeController@index')->name('home')->middleware('auth');

Route::get('/motoristas', 'DriversController@index')->middleware('auth');
Route::get('/motoristas/criar', 'DriversController@create')->middleware('auth');
Route::post('/motoristas/criar', 'DriversController@store')->middleware('auth');
Route::get('/motoristas/{id}/editar', 'DriversController@edit')->middleware('auth');
Route::put('/drivers/{id}/save', 'DriversController@save')->middleware('auth');
Route::delete('drivers/{id}', 'DriversController@destroy');

Route::get('/veiculos', 'CarsController@index')->middleware('auth');
Route::get('/veiculos/criar', 'CarsController@create')->middleware('auth');
Route::post('/veiculos/criar', 'CarsController@store')->middleware('auth');
Route::get('/veiculos/{id}/editar', 'CarsController@edit')->middleware('auth');
Route::put('/cars/{id}/save', 'CarsController@save')->middleware('auth');
Route::delete('cars/{id}', 'CarsController@destroy');

Route::get('/produtos', 'ProductsController@index')->middleware('auth');
Route::get('/produtos/criar', 'ProductsController@create')->middleware('auth');
Route::post('/produtos/criar', 'ProductsController@store')->middleware('auth');
Route::get('/produtos/{id}/editar', 'ProductsController@edit')->middleware('auth');
Route::put('/products/{id}/save', 'ProductsController@save')->middleware('auth');
Route::delete('products/{id}', 'ProductsController@destroy');

Route::get('/carregamentos', 'ChargeController@index')->middleware('auth');
Route::get('/carregamentos/criar', 'ChargeController@create')->middleware('auth');
Route::post('/carregamentos/criar', 'ChargeController@store')->middleware('auth');
Route::delete('charge/{id}', 'ChargeController@destroy');

Route::get('/descarregamentos', 'DischargesController@index')->middleware('auth');
Route::get('/descarregamentos/criar', 'DischargesController@create')->middleware('auth');
Route::post('/descarregamentos/criar', 'DischargesController@store')->middleware('auth');
Route::delete('discharge/{id}', 'DischargesController@destroy');
