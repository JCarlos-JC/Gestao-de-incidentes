<!-- resources/views/departamentos/create.blade.php -->

@extends('Home.dashboard')

@section('content')
    <div class="container">
        <h2>Novo Departamento</h2>
        <form action="{{ route('departamentos.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nome">Nome do Departamento:</label>
                <input type="text" class="form-control" id="nome" name="nome">
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
    </div>
@endsection
