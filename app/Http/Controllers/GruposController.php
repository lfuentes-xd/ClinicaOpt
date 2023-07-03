<?php

namespace App\Http\Controllers;

use App\Models\grupos;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class GruposController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $grupos = grupos::All();
        return view('grupos.index',["grupos"=>$grupos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('grupos.alta');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $Nuevogrp = new grupos;

        $Nuevogrp->id= $request->id;
        $Nuevogrp->Grupo= $request->Grupo;

        $Nuevogrp->Save();

        Return redirect("grupos");
    }

    /**
     * Display the specified resource.
     */
    public function show(grupos $grupos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $editarGrp=grupos::findorfail($id);
        return view ('grupos.modificar', ['grupos'=>$editarGrp]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $editargp=grupos::findorfail($id);

        $editargp->id=$request->id;
        $editargp->Grupo=$request->Grupo;

        $editargp->Save();

        return redirect('grupos');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        grupos::destroy($id);
        return redirect('grupos');
    }
}
