<!-- resources/views/departamentos/show.blade.php -->

@extends('Home.dashboard')

@section('content')
    <div class="container">
        <h2>Detalhes do Departamento</h2>
        <p><strong>ID:</strong> {{ $departamento->id }}</p>
        <p><strong>Nome:</strong> {{ $departamento->nome }}</p>
        <a href="{{ route('departamentos.edit', $departamento->id) }}" class="btn btn-primary">Editar</a>
        <form action="{{ route('departamentos.destroy', $departamento->id) }}" method="POST" style="display: inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Excluir</button>
        </form>
    </div>
@endsection
