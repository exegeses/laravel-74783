<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::metodo('/peticion', acción)
Route::get('/saludo', function (){
    return 'Hola Mundo desde Laravel';
});
/*----- vistas ----*/
Route::view('/inicio', 'inicio');
Route::view('/servicios', 'servicios');
// Route::view('/portfolio', 'portfolio');
Route::get('/portfolio', function () {
    $numero = 10 + 5;
    $empresas = [
        "Mercado Libre",
        "Frávega",
        "Coto Digital",
        "DIA Online",
        "Cuponstar",
        "Groupon Argentina",
        "LetsBonus",
        "Pez Urbano",
        "Descuentocity",
        "Shopear"
    ];
    return view('portfolio',
                [
                    'fruta'=>'manzana',
                    'numero'=>$numero,
                    'empresas'=>$empresas,
                ]);
});
/* base de datos */
Route::get('/personas', function () {
    $personas = DB::select('select * from personas');
    dd($personas);
});
