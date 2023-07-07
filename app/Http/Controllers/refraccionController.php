<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\refraccion;

class refraccionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('refraccion.alta');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nuevoR = new refraccion;

        $nombre = session('nombre');
        $apellido = session('apellido');

        $nuevoR->nombrePac=$nombre;
        $nuevoR->apellidosPac=$apellido;

        $nuevoR->OD=$request->OD;
        $nuevoR->OI=$request->IZ;
        $nuevoR->ODI=$request->ODI;
        $nuevoR->OII=$request->OII;

        $nuevoR->ODer=$request->ODer;
        $nuevoR->OIzq=$request->OIzq;
        $nuevoR->ODav=$request->ODav;
        $nuevoR->OIav=$request->OIav;

        $nuevoR->oir=$request->oi;
        $nuevoR->odr=$request->od;

        $nuevoR->Tod=$request->Tod;
        $nuevoR->Toi=$request->Toi;

        $nuevoR->Mod=$request->Mod;
        $nuevoR->Moi=$request->Moi;

        $nuevoR->ODerd=$request->ODerd;
        $nuevoR->OIzqd=$request->OIzqd;
        $nuevoR->ODavd=$request->ODavd;
        $nuevoR->OIavd=$request->OIavd;

        $nuevoR->save();
        return redirect()->action([PruebasFuncionalesController::class, 'create']);

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
