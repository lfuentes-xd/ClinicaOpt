<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pruebas_preeliminares;


class pruebasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pruebas_preeliminares.alta2');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nuevoR = new Pruebas_preeliminares;
        $nombre = session('nombre');
        $apellido = session('apellido');

        $nuevoR->nombrePac=$nombre;
        $nuevoR->apellidosPac=$apellido;

        $nuevoR->lejosOD=$request->lejosD;
        $nuevoR->capvisualOD=$request->capacidadvisualD;
        $nuevoR->cercaOD=$request->cercaD;

        $nuevoR->lejosOI=$request->lejosI;
        $nuevoR->capvisualOI=$request->capacidadvisualI;
        $nuevoR->cercaOI=$request->cercaI;

        $nuevoR->lejosODC=$request->lejosC;
        $nuevoR->cercaODC=$request->cercaC;
        $nuevoR->lejosOIC=$request->lejosCI;
        $nuevoR->cercaOIC=$request->cercaCI;

        $nuevoR->pupilas=$request->pupilas;
        $nuevoR->DI= $request->DI;
        $nuevoR->MEO= $request->MEO;

        $nuevoR->Hirschberg=$request->Heisenberg;
        $nuevoR->Oizq=$request->izq;
        $nuevoR->Oder=$request->der;
        $nuevoR->CoverTLejos=$request->test;
        $nuevoR->cerca=$request->cercaT;

        $nuevoR->MEDIOSI=$request->MediosI;
        $nuevoR->EPI=$request->EPI;
        $nuevoR->COLORI=$request->ColorI;
        $nuevoR->MARGENI=$request->MargenI;
        $nuevoR->VASOSI=$request->VasosI;
        $nuevoR->MACULAI=$request->MaculaI;
        $nuevoR->FIJACIONI=$request->FijacionI;
        $nuevoR->RETINAI=$request->RetinaI;


        $nuevoR->MEDIOSD=$request->MediosD;
        $nuevoR->EPD=$request->EPD;
        $nuevoR->COLORD=$request->ColorD;
        $nuevoR->MARGEND=$request->MargenD;
        $nuevoR->VASOSD=$request->VasosD;
        $nuevoR->MACULAD=$request->MaculaD;
        $nuevoR->FIJACIOND=$request->FijacionD;
        $nuevoR->RETINAD=$request->RetinaD;

        $nuevoR->save();
        return redirect()->action([refraccionController::class, 'create']);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $verPruebas = Pruebas_preeliminares::findorfail($id);

        return view('pruebas_preeliminares.alta2', ['pruebas' => $verPruebas]);
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
