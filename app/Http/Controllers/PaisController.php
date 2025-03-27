<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pais;
use Illuminate\Support\Facades\DB;

class PaisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pais = Pais::all();
        return view('paises.index',['paises'=>$pais]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pais = DB::table('tb_pais')
        ->select('pais_codi')
        ->get();
    return view('paises.new', ['paises' => $pais]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pais = new Pais();
        $pais->pais_codi = $request->input('pais_codi');
        $pais->pais_nomb = $request->input('pais_nomb');
        $pais->pais_capi = $request->input('pais_capi');
        $pais->save();
        return redirect()->route('paises.index');
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
        $pais = Pais::findOrFail($id);
        return view('paises.edit', compact('pais')); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pais = Pais::findOrFail($id);
        $pais->pais_nomb = $request->input('pais_nomb');
        $pais->pais_capi = $request->input('pais_capi');
        $pais->save();
        return redirect()->route('paises.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pais = Pais::findOrFail($id);
        $pais->delete();
        return redirect()->route('paises.index');
    }
}
