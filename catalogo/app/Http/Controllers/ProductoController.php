<?php

namespace App\Http\Controllers;

use App\Models\Marca;
use App\Models\Categoria;
use App\Models\Producto;
use Illuminate\Http\Request;
use App\Http\Requests\ProductoRequest;

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
     * Store a newly created resource in storage.
     */
    public function store( ProductoRequest $request )
    {
        $prdNombre = $request->prdNombre;
        dd('pasó validación');
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
    public function edit(Producto $producto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Producto $producto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Producto $producto)
    {
        //
    }
}
