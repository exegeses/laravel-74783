<?php

namespace App\Http\Controllers;

use App\Models\Marca;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class MarcaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        // obtenemos el listado de marcas
        //$marcas = DB::table('marcas')->get()
        $marcas = Marca::orderBy('idMarca', 'desc')->paginate(5);
        return view('marcas', ['marcas' => $marcas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        return view('marcaCreate');
    }

    private function validateForm(Request $request) : void
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
    public function store(Request $request) : RedirectResponse
    {
        //capturamos datos
        $nombre = $request->mkNombre;
        //validamos formulario
        $this->validateForm($request);
        //agregamos a tabla marcas
        try {
            $marca = new Marca; //instanciamos
            $marca->mkNombre = $nombre; //asignamos atributos
            $marca->save(); // almacena datos en tabla marcas
            return redirect('/marcas')
                    ->with(
                        [
                            'css'=>'green',
                            'mensaje'=>'Marca: "'.$nombre.'" agragada correctamente'
                        ]
                    );
        }
        catch ( Throwable $th ) {
            return redirect('/marcas')
                ->with(
                    [
                        'css'=>'red',
                        'mensaje'=>'No se pudo agregar la marca: "'.$nombre
                    ]
                );
        }
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
        // obtenemos los datos de una marca por su id
        //$marca = DB::table('marcas')->where('idMarca', $id)->first()
        $marca = Marca::find($id);
        // retornamos la vista del formulario pasándole los datos de la marca
        return view('marcaEdit', ['marca' => $marca]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request) : RedirectResponse
    {
        $idMarca = $request->idMarca;
        $mkNombre = $request->mkNombre;
        //validación
        $this->validateForm($request);
        //modificación
        try{
            $marca = Marca::find($idMarca);
            $marca->mkNombre = $mkNombre;
            $marca->save();
            return redirect('/marcas')
            ->with([
                    'css' => 'green',
                    'mensaje' => "La marca: ".$request->mkNombre." fue actualizada correctamente."
            ]);
        }
        catch( Thowable $th ){
            return redirect('/marcas')
                        ->with([
                            'css' => 'red',
                            'mensaje' => "Error al actualizar la marca: ".$request->mkNombre
                    ]);
        }
    }

    public function delete()
    {
        return view('marcaDelete');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
