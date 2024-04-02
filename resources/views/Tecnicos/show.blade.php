<!-- resources/views/tecnicos/show.blade.php -->

@extends('Home.dashboard')

@section('content')
    <div class="container">
        <h2>Detalhes do Técnico</h2>
        <p><strong>ID:</strong> {{ $tecnico->id }}</p>
        <p><strong>Nome:</strong> {{ $tecnico->nome }}</p>
        <p><strong>Departamento:</strong> {{ $tecnico->departamento->nome }}</p>
        <a href="{{ route('tecnicos.edit', $tecnico->id) }}" class="btn btn-primary">Editar</a>
        <form action="{{ route('tecnicos.destroy', $tecnico->id) }}" method="POST" style="display: inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Excluir</button>
        </form>
    </div>
@endsection
