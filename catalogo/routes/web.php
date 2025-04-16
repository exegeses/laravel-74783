<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MarcaController;

Route::get('/', function () {
    // return view('welcome');
    return view('inicio');
});
Route::view('/plantilla', 'plantilla');

/*######################################*/
## CRUD de marcas
Route::get('/marcas', [ MarcaController::class, 'index' ]);
Route::get('/marca/create', [ MarcaController::class, 'create' ]);
Route::post('/marca/store', [ MarcaController::class, 'store' ]);
