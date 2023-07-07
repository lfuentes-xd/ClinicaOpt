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
