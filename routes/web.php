<?php

use Illuminate\Support\Facades\Route;

$servicios = [/*
    ['titulo' => 'Servicio 01'],
    ['titulo' => 'Servicio 02'],
    ['titulo' => 'Servicio 03'],
    ['titulo' => 'Servicio 04'],
    ['titulo' => 'Servicio 05'],*/
];


Route::view('/','home')->name('home');
Route::view('nosotros','nosotros')->name('nosotros');
Route::get('servicios','App\Http\Controllers\ServiciosController@index')->name('servicios.index');

Route::get('servicios/create','App\Http\Controllers\ServiciosController@create')->name('servicios.create');

Route::get('servicios/{id}/editar','App\Http\Controllers\ServiciosController@edit')->name('servicios.edit');

Route::patch('servicios/{id}','App\Http\Controllers\ServiciosController@update')->name('servicios.update');

Route::post('servicios','App\Http\Controllers\ServiciosController@store')->name('servicios.store');

Route::get('servicios/{id}','App\Http\Controllers\ServiciosController@show')->name('servicios.show');

Route::delete('servicios/{servicio}','App\Http\Controllers\ServiciosController@destroy')->name('servicios.destroy');

Route::view('contacto','contacto')->name('contacto');

//