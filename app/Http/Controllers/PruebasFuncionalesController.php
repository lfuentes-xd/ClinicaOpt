<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PruebasFuncionales;

class PruebasFuncionalesController extends Controller
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
        return view('Pruebas_Funcionales.alta');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nuevoR = new PruebasFuncionales;

        $nombre = session('nombre');
        $apellido = session('apellido');

        $nuevoR->nombrePac=$nombre;
        $nuevoR->apellidosPac=$apellido;

        $nuevoR->FLL= $request->FLL;
        $nuevoR->FVL=$request->FVL;
        $nuevoR->VLL=$request->VLL;
        $nuevoR->BNL=$request->BNL;
        $nuevoR->BTL=$request->BTL;
        $nuevoR->CCF=$request->CCF;
        $nuevoR->ARN=$request->ARN;
        $nuevoR->ARP=$request->ARP;
        $nuevoR->ADDO=$request->ADDO;
        $nuevoR->FLC=$request->FLC;
        $nuevoR->FLC100=$request->FLC1;
        $nuevoR->ACA=$request->AC;
        $nuevoR->FVC=$request->FVC;
        $nuevoR->VVC=$request->VVC;
        $nuevoR->BNC=$request->BNC;
        $nuevoR->BNT=$request->BNT;

        $nuevoR->PPCNA=$request->PPCNA;
        $nuevoR->AAODER=$request->AA;
        $nuevoR->PPCA=$request->PPCA;
        $nuevoR->OIZQ=$request->Izq;

        $nuevoR->AO=$request->AO;
        $nuevoR->ODER=$request->ODER;
        $nuevoR->OIZ=$request->OIZQ;

        $nuevoR->save();

        return redirect()->action([saludOcularController::class, 'create']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $verDatos = PruebasFuncionales::findorfail($id);
        return view ('Pruebas_Funcionales.modificar', ['funcionales' => $verDatos]);
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
        $EditarR =PruebasFuncionales::findorfail($id);

        $EditarR->FLL= $request->FLL;
        $EditarR->FVL=$request->FVL;
        $EditarR->VLL=$request->VLL;
        $EditarR->BNL=$request->BNL;
        $EditarR->BTL=$request->BTL;
        $EditarR->CCF=$request->CCF;
        $EditarR->ARN=$request->ARN;
        $EditarR->ARP=$request->ARP;
        $EditarR->ADDO=$request->ADDO;
        $EditarR->FLC=$request->FLC;
        $EditarR->FLC100=$request->FLC1;
        $EditarR->ACA=$request->AC;
        $EditarR->FVC=$request->FVC;
        $EditarR->VVC=$request->VVC;
        $EditarR->BNC=$request->BNC;
        $EditarR->BNT=$request->BNT;

        $EditarR->PPCNA=$request->PPCNA;
        $EditarR->AAODER=$request->AA;
        $EditarR->PPCA=$request->PPCA;
        $EditarR->OIZQ=$request->Izq;

        $EditarR->AO=$request->AO;
        $EditarR->ODER=$request->ODER;
        $EditarR->OIZ=$request->OIZQ;

        $EditarR->save();

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
