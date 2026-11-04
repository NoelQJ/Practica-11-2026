<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   public function index(): View {
        $productos = Producto::All();
        return view ('productos.productos', compact('productos'));
        }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request->All());
        $request->validate([
         'productos'=>"required",
         'categoria'=>"required",
         'precio'=>"required",
         'stock'=>"required" 
         ]);
         Producto::create($request->All());
         return redirect()->route('producto.index')->with('sucess', 'Producto guardado');
    }

    /**
     * Display the specified resource.
     */
    public function destroy($id)
    {
        $producto = Producto::findOrFail($id);
        $producto->delete();
        return redirect()->route('producto.index')->with('success', 'Producto eliminado con éxito');
    }


    public function edit($id)
    {
        $producto = Producto::findOrFail($id);
        return view('productos.edit', compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'productos' => 'required',
            'categoria' => 'required',
            'precio'    => 'required',
            'stock'     => 'required'
        ]);

        $producto = Producto::findOrFail($id);
        $producto->update($request->all());
        return redirect()->route('producto.index')->with('success', 'Producto actualizado con éxito');
    }
   }
