<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HistorialClinico;
use App\Models\pacientes;
use Illuminate\Console\View\Components\Alert;

class HistorialClinicoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datosPac = HistorialClinico::All(); #mandamos todos los registros que tiene la bd.
        return view('Historial_Clinico.index', ["historial" => $datosPac]); #le pasamos los datos en la variable.
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pacientes = pacientes::all();
        return view('Historial_Clinico.alta', ["pacientes" => $pacientes]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $NuevoH = new HistorialClinico;

            $selPac = explode('-', $request->paciente);

            $nombre = $selPac[0];
            $apellido = $selPac[1];

            session(['nombre' => $nombre, 'apellido' => $apellido]);

            #datos del paciente
            $NuevoH->nombrePac= $nombre;
            $NuevoH->apellidoPac=$apellido;

            #motivo de la consulta
            $NuevoH->Vista_borrosa = $request->Vision;
            $NuevoH->Fatiga_Ocular = $request->Fatiga;
            $NuevoH->cefalea = $request->Cefalea;
            $NuevoH->Sintomas_externos = $request->Sintomas;
            $NuevoH->Alteraciones = $request->Alteraciones;
            $NuevoH->Vision_doble = $request->doble;
            $NuevoH->Desviacion_Ocular = $request->desviacion;
            $NuevoH->Problemas_lectura = $request->problemas;

            #Historia Ocular
            $NuevoH->Historial_oc = $request->Historia;

            #Historial Salud
            $NuevoH->Salud_general = $request->salud;
            $NuevoH->medicamentos = $request->salud;
            $NuevoH->medicamentos = $request->medicacion;
            $NuevoH->alergias = $request->Alergias;

            #Impresion diagnositca
            $NuevoH->ocular = $request->ocular;
            $NuevoH->medica = $request->medica;
            $NuevoH->impresion_diag = $request->Impresion;


            $NuevoH->save();
            return redirect()->action([pruebas::class, 'create']);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
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
