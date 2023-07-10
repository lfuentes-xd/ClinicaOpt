<?php

namespace App\Http\Controllers;

use App\Models\productos;
use App\Models\grupos;
use App\Models\Marcas;
use Illuminate\Http\Request;


class productosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos=productos::all();
        return view('productos.index',["productos"=>$productos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $catProd = Marcas::all();
        $grupos = grupos::all();
        return view('productos.Alta',
        ['prod'=>$catProd,
        'grupos' =>$grupos
    ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $NuevoP = new productos;

        $selPac = explode('-', $request->Grupo);
        $id = $selPac[0]; #llave foranea de los GRUPOS
        $Grupo = $selPac[1];

        $selMac = explode('-', $request->Marca);
        $idM = $selMac[0]; #Llave foranea de marca
        $Marca = $selMac[1];

        $NuevoP->Grupo=$Grupo;
        $NuevoP->Marca=$Marca;
        $NuevoP->claveMarca=$idM;
        $NuevoP->claveGrupo=$id;
        $NuevoP->Descripcion=$request->Descripcion;
        $NuevoP->Precio_vta=$request->Precio;
        $NuevoP->Fecha_alta=$request->Fecha;
        $NuevoP->Existencia=$request->Existencia;

        $NuevoP->save();
        return redirect('productos');
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
        $Editprod= productos::findorfail($id);


        return view ('productos.modi', ["producto"=>$Editprod]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $editarProd = productos::findorfail($id);

        $editarProd->Descripcion=$request->Descripcion;
        $editarProd->Precio_vta=$request->Precio;
        $editarProd->Fecha_alta=$request->Fecha;
        $editarProd->Existencia=$request->Existencia;

        $editarProd->Save();

        return redirect('productos');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        productos::destroy($id);
        return redirect('Productos');
    }
}
