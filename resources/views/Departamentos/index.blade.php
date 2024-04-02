<!-- resources/views/departamentos/index.blade.php -->

@extends('Home.dashboard')

@section('content')
    <div class="container">
        <h2>Lista de Departamentos</h2>
        <a href="{{ route('departamentos.create') }}" class="btn btn-success">Novo Departamento</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($departamentos as $departamento)
                    <tr>
                        <td>{{ $departamento->id }}</td>
                        <td>{{ $departamento->nome }}</td>
                        <td>
                            <a href="{{ route('departamentos.show', $departamento->id) }}" class="btn btn-info">Ver</a>
                            <a href="{{ route('departamentos.edit', $departamento->id) }}" class="btn btn-primary">Editar</a>
                            <form action="{{ route('departamentos.destroy', $departamento->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
