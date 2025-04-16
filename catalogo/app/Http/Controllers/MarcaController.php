<?php

namespace App\Http\Controllers;

use App\Models\Marca;
use Illuminate\Http\Request;

class MarcaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // obtenemos el listado de marcas
        //$marcas = DB::table('marcas')->get()
        $marcas = Marca::paginate(5);
        return view('marcas', ['marcas' => $marcas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('marcaCreate');
    }

    private function validateForm(Request $request)
    {
        $request->validate(
        // [ 'campo'=> 'regla1|regla2' ],
        /*  'campo.regla1' = 'mensaje regla1'
        /*  'campo.regla2' = 'mensaje regla2'
         * */
            [ 'mkNombre' => 'required|unique:marcas,mkNombre|min:2|max:45' ],
            [
                'mkNombre.required' => 'El campo "Nombre de la marca" es obligatorio',
                'mkNombre.unique' => 'El campo "Nombre de la marca" ya existe',
                'mkNombre.min' => 'El campo "Nombre de la marca" debe tener al menos 2 caractéres',
                'mkNombre.max' => 'El campo "Nombre de la marca" debe tener 45 caractéres como máximo'
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //capturamos datos
        $nombre = $request->mkNombre;
        //validamos formulario
        $this->validateForm($request);
        //agregamos a tabla marcas
        return 'pasó la validación';
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
