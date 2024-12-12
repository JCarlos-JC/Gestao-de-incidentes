@extends('Home.dashboard')

@section('content')
<div class="container">
    <h2>Detalhes do Departamento</h2>
   
       


<div class="row">
                        <div class="col-md-12 mx-auto">
                            <div id="" class="table-responsive">
                                <table class="table table-striped">
                                    <thead class="bg-success text-white">
                                        <tr>
                                            <th >Id do departamento</th>
                                            <th >Incidente</th>
                                            <th >Local</th>
                                            <th >Nível</th>
                                            <th  colspan="3">Ações</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($resultados as $resultado)
                                            <tr>
                                                <td>{{ $resultado->departamento_id }}</td>
                                                <td>{{ $resultado->descricao }}</td> <!--configurar para poder receber aquivos e criar uma logica de armazenamento no storage ou public e na base de dados  -->
                                                <td>{{ $resultado->local }}</td>
                                                 <!-- apagar na migration o 'pessoa_contacto' para contanto somente -->
                                                <td>{{ $resultado->nivel }}</td>
                                                
                                                <!-- <td></td> alocar incidentes para o departamento atraves de um clique que o helpdesk for a efetuar  -->
                                                <td>
                                                    <a href="{{ route('associarTec.associar', $resultado->id) }}" class="btn btn-warning"><i class="fas fa-eye"></i></a>
                                                    <a href="{{ route('incidentes.show', $resultado->id) }}" class="btn btn-warning"><i class="fas fa-eye"></i></a>

                                                    <a href="{{ route('incidentes.edit', $resultado->id) }}" class="btn btn-primary"><i class="fas fa-edit"></i> </a>
                                                    <form action="{{ route('incidentes.destroy', $resultado->id) }}" method="POST" style="display: inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i> </button>
                                                    </form>
                                                </td>
                                            </tr>
                                            @endforeach
                                    </tbody>
                                </table>
                            </div>
                         </div>

@endsection