<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SaludOcular;

class saludOcularController extends Controller
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
        return view('salud_ocular.alta');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nuevoR = new SaludOcular;

        $nombre = session('nombre');
        $apellido = session('apellido');

        $nuevoR->nombrePac=$nombre;
        $nuevoR->apellidosPac=$apellido;

        $nuevoR->Anexos=$request->ANEXOS;
        $nuevoR->Conjuntiva=$request->Conjuntiva;
        $nuevoR->Escalera=$request->Esclera;
        $nuevoR->Cornea=$request->Cornea;
        $nuevoR->TRL=$request->TLR;
        $nuevoR->VonHerickT=$request->TD;
        $nuevoR->VonHerickN=$request->ND;
        $nuevoR->CamaraAnterior=$request->camD;
        $nuevoR->Iris=$request->Iris;
        $nuevoR-> Cristalino=$request->Cristalino;


        $nuevoR->AnexosI=$request->ANEXOSi;
        $nuevoR->ConjuntivaI=$request->Conjuntivai;
        $nuevoR->EscaleraI=$request->Esclerai;
        $nuevoR->CorneaI=$request->Corneai;
        $nuevoR->TRLI=$request->TLRi;
        $nuevoR->VonHerickTI=$request->TDi;
        $nuevoR->VonHerickNI=$request->NDi;
        $nuevoR->CamaraAnteriorI=$request->cami;
        $nuevoR->IrisI=$request->Irisi;
        $nuevoR-> CristalinoI=$request->Cristalinoi;

        $nuevoR->Presionintra=$request->presion;

        $nuevoR->save();

        return redirect()->action([RXController::class, 'create']);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $verdatos= SaludOcular::findorfail($id);
        return view('salud_ocular.modificar', ['salud'=>$verdatos]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $editarR = SaludOcular::findorfail($id);

        $editarR->Anexos=$request->ANEXOS;
        $editarR->Conjuntiva=$request->Conjuntiva;
        $editarR->Escalera=$request->Esclera;
        $editarR->Cornea=$request->Cornea;
        $editarR->TRL=$request->TLR;
        $editarR->VonHerickT=$request->TD;
        $editarR->VonHerickN=$request->ND;
        $editarR->CamaraAnterior=$request->camD;
        $editarR->Iris=$request->Iris;
        $editarR-> Cristalino=$request->Cristalino;


        $editarR->AnexosI=$request->ANEXOSi;
        $editarR->ConjuntivaI=$request->Conjuntivai;
        $editarR->EscaleraI=$request->Esclerai;
        $editarR->CorneaI=$request->Corneai;
        $editarR->TRLI=$request->TLRi;
        $editarR->VonHerickTI=$request->TDi;
        $editarR->VonHerickNI=$request->NDi;
        $editarR->CamaraAnteriorI=$request->cami;
        $editarR->IrisI=$request->Irisi;
        $editarR-> CristalinoI=$request->Cristalinoi;

        $editarR->Presionintra=$request->presion;

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
