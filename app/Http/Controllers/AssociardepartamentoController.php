<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Incidente;
use App\Models\Departamento;
use App\Models\AssociarDep;
use Illuminate\Support\Facades\DB;

class AssociardepartamentoController extends Controller
{
    public function edit($id)
    {
        $incidente = Incidente::findOrFail($id);
        return view('departamentos.associarDep', compact('incidente'));
    }

    public function store(Request $request)
{
    $associarDep = new AssociarDep();
    $associarDep->incidente_id = $request->incidente_id;
    $associarDep->departamento_id = $request->departamento_id;
   
    $associarDep->save();

    return redirect('Departamentos/verAssociarDep');
    
}
   

    public function buscarDepartamentos()
    {
        $departamento = Departamento::all(); 
        return response()->json($departamento); 
    }

    public function visualizarAssociacao()
    {

        $resultados = DB::table('incidentes')
        ->join('associardepartamentos', 'incidentes.id', '=', 'associardepartamentos.incidente_id')
        ->select('incidentes.*', 'associardepartamentos.*')
        ->get();

    return view('Departamentos/verAssociarDep', ['resultados' => $resultados]);

    }
}
