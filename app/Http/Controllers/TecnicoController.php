<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tecnico;
use App\Models\Departamento;

class TecnicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tecnicos = Tecnico::all();
        return view('tecnicos.index', compact('tecnicos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departamentos = Departamento::all();
        return view('tecnicos.create', compact('departamentos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'departamento_id' => 'required|exists:departamentos,id',
        ]);

        Tecnico::create($request->all());
        
        return redirect()->route('tecnicos.index')
                         ->with('success','Técnico criado com sucesso.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tecnico  $tecnico
     * @return \Illuminate\Http\Response
     */
    public function show(Tecnico $tecnico)
    {
        return view('tecnicos.show', compact('tecnico'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tecnico  $tecnico
     * @return \Illuminate\Http\Response
     */
    public function edit(Tecnico $tecnico)
    {
        $departamentos = Departamento::all();
        return view('tecnicos.edit', compact('tecnico', 'departamentos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tecnico  $tecnico
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tecnico $tecnico)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'departamento_id' => 'required|exists:departamentos,id',
        ]);

        $tecnico->update($request->all());

        return redirect()->route('tecnicos.index')
                         ->with('success','Técnico atualizado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tecnico  $tecnico
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tecnico $tecnico)
    {
        $tecnico->delete();

        return redirect()->route('tecnicos.index')
                         ->with('success','Técnico deletado com sucesso');
    }
}
