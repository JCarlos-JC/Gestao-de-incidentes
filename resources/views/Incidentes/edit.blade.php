<!-- resources/views/incidentes/edit.blade.php -->

@extends('Home.dashboard')

@section('content')
    <div class="container">
        <h1>Editar Incidente</h1>
        <form action="{{ route('incidentes.update', $incidente->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="descricao">Descrição:</label>
                <input type="text" name="descricao" class="form-control" value="{{ $incidente->descricao }}">
            </div>
            <div class="form-group">
                <label for="arquivo">Arquivo:</label>
                <input type="file" name="arquivo" id="arquivo"class="form-control-file" value="{{ $incidente->arquivo }}">
            </div>
            <div class="form-group">
                <label for="local">Local:</label>
                <input type="text" name="local" class="form-control" value="{{ $incidente->local }}">
            </div>
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" class="form-control" value="{{ $incidente->nome }}">
            </div>
            <div class="form-group">
                <label for="pessoa_contacto">Pessoa de Contato:</label>
                <input type="text" name="pessoa_contacto" class="form-control" value="{{ $incidente->pessoa_contacto }}">
            </div>
            <div class="form-group">
                <label for="nivel">Nível:</label>
                <input type="text" name="nivel" class="form-control" value="{{ $incidente->nivel }}">
            </div>
            <div class="form-group">
                <label for="estado">Estado:</label>
                <select name="estado" class="form-control">
                    <option value="1" {{ $incidente->estado ? 'selected' : '' }}>Ativo</option>
                    <option value="0" {{ !$incidente->estado ? 'selected' : '' }}>Inativo</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
    </div>
@endsection
