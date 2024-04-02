<!-- resources/views/tecnicos/create.blade.php -->

@extends('Home.dashboard')

@section('content')
    <div class="container">
        <h2>Novo Técnico</h2>
        <form action="{{ route('tecnicos.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nome">Nome do Técnico:</label>
                <input type="text" class="form-control" id="nome" name="nome">
            </div>
            <div class="form-group">
                <label for="departamento_id">Departamento:</label>
                <select class="form-control" id="departamento_id" name="departamento_id">
                    @foreach($departamentos as $departamento)
                        <option value="{{ $departamento->id }}">{{ $departamento->nome }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
    </div>
@endsection
