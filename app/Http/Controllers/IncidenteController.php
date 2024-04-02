<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Incidente;

class IncidenteController extends Controller
{
    /**
     * Exibe uma lista de todos os incidentes.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $incidentes = Incidente::paginate(10); // Paginate para exibir 10 incidentes por página
        return view('incidentes.index', compact('incidentes'));
    }

    /**
     * Exibe o formulário para criar um novo incidente.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('incidentes.create');
    }

    /**
     * Armazena um novo incidente no banco de dados.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validação dos dados do formulário
        $request->validate([
            'descricao' => 'required|string',
            'arquivo' => 'required|string',
            'local' => 'required|string',
            'nome' => 'required|string',
            'pessoa_contacto' => 'required|string',
            'nivel' => 'required|string',
            'estado' => 'required|boolean',
        ]);

        // Criação do incidente
        Incidente::create($request->all());

        return redirect()->route('incidentes.index')
                         ->with('success', 'Incidente criado com sucesso.');
    }

    /**
     * Exibe os detalhes de um incidente específico.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $incidente = Incidente::findOrFail($id);
        return view('incidentes.show', compact('incidente'));
    }

    /**
     * Exibe o formulário para editar um incidente específico.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $incidente = Incidente::findOrFail($id);
        return view('incidentes.edit', compact('incidente'));
    }

    /**
     * Atualiza um incidente específico no banco de dados.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Validação dos dados do formulário
        $request->validate([
            'descricao' => 'required|string',
            'arquivo' => 'required|string',
            'local' => 'required|string',
            'nome' => 'required|string',
            'pessoa_contacto' => 'required|string',
            'nivel' => 'required|string',
            'estado' => 'required|boolean',
        ]);

        // Busca e atualiza o incidente
        $incidente = Incidente::findOrFail($id);
        $incidente->update($request->all());

        return redirect()->route('incidentes.index')
                         ->with('success', 'Incidente atualizado com sucesso.');
    }

    /**
     * Remove um incidente específico do banco de dados.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $incidente = Incidente::findOrFail($id);
        $incidente->delete();

        return redirect()->route('incidentes.index')
                         ->with('success', 'Incidente excluído com sucesso.');
    }
}
