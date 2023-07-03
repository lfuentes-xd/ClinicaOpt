<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pacientes;

class pacientesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pacientes = pacientes::all();
        return view('pacientes.index',["pacientes"=>$pacientes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pacientes.alta');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $NuevoPac = new pacientes;

        $NuevoPac->nombre= $request-> Nombre;
        $NuevoPac->apellidos= $request->Apellidos;
        $NuevoPac->fecha_nac= $request->Fecha;
        $NuevoPac->ocupacion=$request->ocupacion;
        $NuevoPac->calle= $request->calle;
        $NuevoPac->numero=$request->numero;
        $NuevoPac->colonia=$request->colonia;
        $NuevoPac->ciudad= $request->ciudad;
        $NuevoPac->estado= $request->estado;
        $NuevoPac->ciudad= $request->ciudad;
        $NuevoPac->CP= $request->CP;
        $NuevoPac->Correo= $request->correo;
        $NuevoPac->observaciones= $request->observaciones;
        $NuevoPac->Telefono= $request->telefono;

        $NuevoPac->Save();

        return redirect('Pacientes');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $editPac=pacientes::findorfail($id);

        return view('pacientes.ver', ["pacientes" => $editPac]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $editPac=pacientes::findorfail($id);

        return view('pacientes.actualizacion', ["pacientes" => $editPac]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $editPac = pacientes::findorfail($id);

        $editPac->nombre= $request-> Nombre;
        $editPac->apellidos= $request->Apellidos;
        $editPac->fecha_nac= $request->Fecha;
        $editPac->ocupacion=$request->ocupacion;
        $editPac->calle= $request->calle;
        $editPac->numero=$request->numero;
        $editPac->colonia=$request->colonia;
        $editPac->ciudad= $request->ciudad;
        $editPac->estado= $request->estado;
        $editPac->ciudad= $request->ciudad;
        $editPac->CP= $request->CP;
        $editPac->Correo= $request->correo;
        $editPac->observaciones= $request->observaciones;
        $editPac->Telefono= $request->telefono;

        $editPac->Save();

        return redirect('Pacientes');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        pacientes::destroy($id);
        return redirect('Pacientes');
    }
}
