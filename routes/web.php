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

Route::resource('servicios','App\Http\Controllers\ServiciosController')->names('servicios');

Route::post('contacto','App\Http\Controllers\ContactoController@store');

Route::view('contacto','contacto')->name('contacto');

Auth::routes(['register'=>true]);