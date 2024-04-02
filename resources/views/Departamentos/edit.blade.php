<!-- resources/views/departamentos/edit.blade.php -->

@extends('Home.dashboard')

@section('content')
    <div class="container">
        <h2>Editar Departamento</h2>
        <form action="{{ route('departamentos.update', $departamento->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nome">Nome do Departamento:</label>
                <input type="text" class="form-control" id="nome" name="nome" value="{{ $departamento->nome }}">
            </div>
            <button type="submit" class="btn btn-primary">Salvar Alterações</button>
        </form>
    </div>
@endsection
