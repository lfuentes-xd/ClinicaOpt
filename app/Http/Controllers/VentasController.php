<?php

namespace App\Http\Controllers;

use App\Models\ventas;
use App\Models\productos;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;
use Illuminate\Support\Facades\DB;


class VentasController extends Controller
{
    /**
     * Display a listing of the resource.
     */


     public function datosProd(Request $request)
     {
         $clave = $request->input('agregar');

         $query = "SELECT id, Grupo, Marca, Existencia, Precio_vta FROM productos WHERE id = :clave";
         $bindings = ['clave' => $clave];
         $producto = DB::select($query, $bindings);

         if (!empty($producto)) {
             // Resto del código...

             return response()->json([
                 'clave' => $producto[0]->id,
                 'Grupo' => $producto[0]->Grupo,
                 'Marca' => $producto[0]->Marca,
                 'Existencia' => $producto[0]->Existencia,
                 'precio' => $producto[0]->Precio_vta
             ]);
         } else {
             return response()->json([
                 'message' => 'No se encontró ningún producto con la clave especificada.'
             ], 404);
         }
     }

    public function index()
    {
        return view('ventas.index');
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ventas $ventas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(String $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, String $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $id)
    {

    }
}
