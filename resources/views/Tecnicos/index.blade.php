@extends('Home.dashboard')

@section('content')
    <div class="container">
        <h2 class="my-2">Lista de Técnicos</h2>
        <div class="d-flex justify-content-end">
            <a href="{{ route('tecnicos.create') }}" class="btn btn-success my-2">Novo</a>
        </div>
        <table class="table table-striped">
            <thead class="bg-success text-light">
                <tr>
                    <!-- <th>ID</th>  //por remover -->
                    <th>Nome</th>
                    <th>Departamento</th>
                    <th colspan="3">Ações</th>
                </tr>
            </thead>        
            <tbody>
                @foreach ($tecnicos as $tecnico)
                    <tr>
                        <!-- <td>{{ $tecnico->id }}</td>  //por remover --> 
                        <td>{{ $tecnico->nome }}</td> <!-- criar uma logica de autenticacao na qual o tecnico so podera visualizar onde o seu nome consta -->
                        <td>{{ $tecnico->departamento->nome }}</td>
                        <td>
                            <a href="{{ route('tecnicos.show', $tecnico->id) }}" class="btn btn-warning"><i class="fas fa-eye"></i></a>
                            <a href="{{ route('tecnicos.edit', $tecnico->id) }}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                            <form action="{{ route('tecnicos.destroy', $tecnico->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection



<!-- Essa e a view de parametrizacao dos tecnicos na qual ira criar se uma outra view para poder obdecer os criterios a cima. -->