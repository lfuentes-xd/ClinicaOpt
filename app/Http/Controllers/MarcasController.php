<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marcas;

class MarcasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $catprod=Marcas::all();
        return view('catalogoProd.index',["catprod"=>$catprod]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('catalogoProd.alta');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $Nuevor = new Marcas();
        $Nuevor->id=$request->Clave;
        $Nuevor->Marca=$request->Marca;

        $Nuevor->Save();

        return redirect('/Marcas');
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
        $editprod = Marcas::findorfail($id);
        return view('catalogoProd.act', ["productos"=>$editprod]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $editarMar=Marcas::findorfail($id);

        $editarMar->Marca=$request->Marca;

        $editarMar->Save();

        return redirect('/Marcas');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Marcas::destroy($id);
        return redirect('/Marcas');
    }
}
