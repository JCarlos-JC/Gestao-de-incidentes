<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Incidente;
use App\Models\Departamento;
use App\Models\AssociarDep;
use App\Models\Tecnico;
use App\Models\AssociarTec;

class AssociartecnicooController extends Controller
{
    public function edit($id)
    {
        $incidente = Incidente::findOrFail($id);
        return view('Tecnicos.associarTec', compact('incidente'));
    }

    public function buscarTecnicos()
    {
        $tecnicos = Tecnico::all();
        return response()->json($tecnicos); 
    }

    public function store(Request $request)
{
    $associarTec = new AssociarTec();
    $associarTec->associardepartamento_id = $request->associardepartamento_id;
    $associarTec->tecnico_id = $request->tecnico_id;
   
    $associarTec->save();

    return redirect('Departamentos/verAssociarDep');
    
}
}
