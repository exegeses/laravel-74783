<?php

namespace App\Http\Controllers;

use App\Models\Marca;
use App\Models\Categoria;
use App\Models\Producto;
use Illuminate\Http\Request;
use App\Http\Requests\ProductoRequest;
use Illuminate\View\View;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // obtenemos listado de productos
        // $productos = DB::select();
        // $productos = DB::table('productos as p')
        //                      ->join('marcas as m', 'p.idMarca', '=', 'm.idMarca');
        $productos = Producto::with(['getMarca', 'getCat'])->paginate(5);
        return view('productos', ['productos' => $productos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // obtenemos listados de marcas y de categorías
        $marcas = Marca::all();
        $categorias = Categoria::all();
        return view('productoCreate',
                [
                    'marcas' => $marcas,
                    'categorias' => $categorias
                ]
            );
    }

    /**
     * método para subir la imagen si fue enviada
     */
    private function uploadImage( Request $request ) : string
    {
        // si no enviaron imagen store()
        $prdImagen = 'noDisponible.svg';

        // si no enviaron imagen update()
        if( $request->has('imgActual') ){
            $prdImagen = $request->imgActual;
        }

        // en ENVIARON imagen
        if ( $request->file('prdImagen') ) {
            $file = $request->file('prdImagen');
            //renombrado ts
            $time = time();
            $extension = $file->getClientOriginalExtension();
            $prdImagen = time().'.'.$extension;
            //subida
            $file->move( public_path('/imgs/productos'), $prdImagen  );
        }
        return $prdImagen;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store( ProductoRequest $request )
    {
        $prdNombre = $request->prdNombre;
        $prdImagen =  $this->uploadImage( $request );
        try {
            /* $producto = new Producto;
            $producto->prdNombre = $prdNombre;
            $producto->prdPrecio = $request->prdPrecio;
            $producto->idMarca = $request->idMarca;
            $producto->idCategoria = $request->idCategoria;
            $producto->prdDescripcion = $request->prdDescripcion;
            $producto->prdImagen = $prdImagen;
            $producto->save();*/
            Producto::create(
                [
                    'prdNombre' => $prdNombre,
                    'prdPrecio' => $request->prdPrecio,
                    'idMarca' => $request->idMarca,
                    'idCategoria' => $request->idCategoria,
                    'prdDescripcion' => $request->prdDescripcion,
                    'prdImagen' => $prdImagen
                ]
            );
            return redirect('/productos')
                        ->with([
                            'mensaje' => 'Producto: '.$prdNombre.' agregado correctamente.',
                            'css' => 'green'
                        ]);
        }catch ( Throwable $th ) {
            return redirect('/productos')
                ->with([
                    'mensaje' => 'No se pudo agregar el producto: '.$prdNombre,
                    'css' => 'red'
                ]);

        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */

    //public function edit(Request $request)
    public function edit(Producto $producto): View
    {
        // $producto = Producto::find($request->id);
        $marcas = Marca::all();
        $categorias = Categoria::all();
        return view('productoEdit',
            [
                'marcas' => $marcas,
                'categorias' => $categorias,
                'producto' => $producto
            ]);
    }

    /**
     * Update the specified resource in storage.
     */
    //public function update(Request $request)
    public function update(ProductoRequest $request, Producto $producto)
    {
        $prdNombre = $request->prdNombre;
        //subidad de archivo*
        $prdImagen =  $this->uploadImage( $request );
        try {
            // $producto = Producto::find($request->idProducto);
            // asignamos atributos
            /* $producto->prdNombre = $prdNombre;
            $producto->prdPrecio = $request->prdPrecio;
            $producto->idMarca = $request->idMarca;
            $producto->idCategoria = $request->idCategoria;
            $producto->prdDescripcion = $request->prdDescripcion;
            $producto->prdImagen = $prdImagen;
            $producto->save(); */
            $producto->update(
                [
                    'prdNombre' => $prdNombre,
                    'prdPrecio' => $request->prdPrecio,
                    'idMarca' => $request->idMarca,
                    'idCategoria' => $request->idCategoria,
                    'prdDescripcion' => $request->prdDescripcion,
                    'prdImagen' => $prdImagen
                ]
            );
            return redirect('/productos')
                ->with([
                    'mensaje' => 'Producto: '.$prdNombre.' modificado correctamente.',
                    'css' => 'green'
                ]);

        }catch ( Throwable $th ) {
            return redirect('/productos')
                ->with([
                    'mensaje' => 'No se pudo modificar el producto: '.$prdNombre,
                    'css' => 'red'
                ]);

        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Producto $producto)
    {
        //
    }
}
