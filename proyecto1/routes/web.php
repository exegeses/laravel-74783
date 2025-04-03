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
    return view('personas', ['personas'=>$personas]);
});
Route::get('/create/persona', function () {
    return view('create-persona');
});
Route::post('/store/persona', function () {
    //capturamos datos enviados por el form
    // $nombre = $_POST['nombre'];
    // $nombre = request()->post('nombre');
    // $nombre = request()->input('nombre');
    $nombre = request('nombre');
    $apellido = request('apellido');
    $dni = request('dni');
    $nacimiento = request('nacimiento');
    try{
        //insertamos datos en tabla personas
        /* raw SQL */
        DB::insert('INSERT INTO personas
                        (nombre, apellido, dni, nacimiento)
                    VALUES
                        (:nombre,:apellido,:dni,:nacimiento)',
                        [$nombre, $apellido, $dni, $nacimiento] );
        // flashing de confirmación (redireccion + mensaje)
        return redirect('/personas')
                    ->with([
                        'css' => 'success',
                        'mensaje' => 'Persona: '.$nombre.' '.$apellido. ' agregada correctamente'
                    ]);
    }
    catch ( Throwable $th ){
        // flashing de error (redireccion + mensaje)
        return redirect('/personas')
            ->with([
                'css' => 'danger',
                'mensaje' => 'No se pudo agregar la persona: '.$nombre.' '.$apellido
            ]);
    }

    //return 'token 419'; //view('store-persona');
});
