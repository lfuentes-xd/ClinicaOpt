<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rx;

class RXController extends Controller
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
        return view('RX.alta');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nuevoR= new RX;

        $nombre = session('nombre');
        $apellido = session('apellido');

        $nuevoR->nombrePac =$nombre;
        $nuevoR->apellidoSPac = $apellido;

        $nuevoR->Esfera = $request->Esfera;
        $nuevoR->Cilindro=$request->cilindro;
        $nuevoR->Eje =$request->Eje;
        $nuevoR->Add=$request->Add;
        $nuevoR->DI=$request->DI;
        $nuevoR->lejos=$request->lejos;
        $nuevoR->cerca=$request->cerca;

        $nuevoR->Esferai = $request->Esferai;
        $nuevoR->Cilindroi=$request->cilindroi;
        $nuevoR->Ejei =$request->Ejei;
        $nuevoR->Addi=$request->Addi;
        $nuevoR->DIi=$request->DIi;
        $nuevoR->lejosi=$request->lejosi;
        $nuevoR->cercai=$request->cercai;


        $nuevoR->EsferaC=$request->EsferaC;
        $nuevoR->CilindroC=$request->cilindroC;
        $nuevoR->EjeC =$request->EjeC;
        $nuevoR->AddC=$request->AddC;
        $nuevoR->DIC=$request->DIC;
        $nuevoR->lejosC=$request->lejosC;
        $nuevoR->cercaC=$request->cercaC;

        $nuevoR->EsferaCI = $request->EsferaCI;
        $nuevoR->CilindroCI=$request->cilindroCI;
        $nuevoR->EjeCI =$request->EjeCI;
        $nuevoR->AddCI=$request->AddCI;
        $nuevoR->DICI=$request->DICI;
        $nuevoR->lejosCI=$request->lejosCI;
        $nuevoR->cercaCI=$request->cercaCI;


        $nuevoR->Tipo=$request->Tipo;
        $nuevoR->Material=$request->Material;
        $nuevoR->Color=$request->Color;
        $nuevoR->RefractivoOD=$request->RefractivoD;
        $nuevoR->RefractivoOI=$request->RefractivoI;
        $nuevoR->VisionBinocular=$request->binocular;
        $nuevoR->SaludOcular=$request->SaludOcular;

        $nuevoR->I=$request->I;
        $nuevoR->II=$request->II;
        $nuevoR->III=$request->III;

        $nuevoR->Observaciones=$request->Observaciones;

        $nuevoR->save();

        return redirect()->action([HistorialClinicoController::class, 'index']);
  }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $verdatos = Rx::findorfail($id);
        return view('RX.modificar', ['rx'=>$verdatos]);
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
        $editarR= Rx::findorfail($id);

        $editarR->Esfera = $request->Esfera;
        $editarR->Cilindro=$request->cilindro;
        $editarR->Eje =$request->Eje;
        $editarR->Add=$request->Add;
        $editarR->DI=$request->DI;
        $editarR->lejos=$request->lejos;
        $editarR->cerca=$request->cerca;

        $editarR->Esferai = $request->Esferai;
        $editarR->Cilindroi=$request->cilindroi;
        $editarR->Ejei =$request->Ejei;
        $editarR->Addi=$request->Addi;
        $editarR->DIi=$request->DIi;
        $editarR->lejosi=$request->lejosi;
        $editarR->cercai=$request->cercai;


        $editarR->EsferaC=$request->EsferaC;
        $editarR->CilindroC=$request->cilindroC;
        $editarR->EjeC =$request->EjeC;
        $editarR->AddC=$request->AddC;
        $editarR->DIC=$request->DIC;
        $editarR->lejosC=$request->lejosC;
        $editarR->cercaC=$request->cercaC;

        $editarR->EsferaCI = $request->EsferaCI;
        $editarR->CilindroCI=$request->cilindroCI;
        $editarR->EjeCI =$request->EjeCI;
        $editarR->AddCI=$request->AddCI;
        $editarR->DICI=$request->DICI;
        $editarR->lejosCI=$request->lejosCI;
        $editarR->cercaCI=$request->cercaCI;


        $editarR->Tipo=$request->Tipo;
        $editarR->Material=$request->Material;
        $editarR->Color=$request->Color;
        $editarR->RefractivoOD=$request->RefractivoD;
        $editarR->RefractivoOI=$request->RefractivoI;
        $editarR->VisionBinocular=$request->binocular;
        $editarR->SaludOcular=$request->SaludOcular;

        $editarR->I=$request->I;
        $editarR->II=$request->II;
        $editarR->III=$request->III;

        $editarR->Observaciones=$request->Observaciones;

        $editarR->save();

        return redirect()->action([HistorialClinicoController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
