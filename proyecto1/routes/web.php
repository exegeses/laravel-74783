<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::metodo('/peticion', acción)
Route::get('/saludo', function (){
    return 'Hola Mundo desde Laravel';
});
