<!-- resources/views/incidentes/create.blade.php -->

@extends('Home.dashboard')

@section('content')
    <div class="container">
        <h1>Criar Novo Incidente</h1>
        <form action="{{ route('incidentes.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="descricao">Descrição:</label>
                <input type="text" name="descricao" class="form-control" placeholder="Descrição do incidente">
            </div>
            <div class="form-group">
                <label for="arquivo">Arquivo:</label>
                <input type="text" name="arquivo" class="form-control" placeholder="Arquivo relacionado ao incidente">
            </div>
            <div class="form-group">
                <label for="local">Local:</label>
                <input type="text" name="local" class="form-control" placeholder="Local do incidente">
            </div>
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" class="form-control" placeholder="Nome do incidente">
            </div>
            <div class="form-group">
                <label for="pessoa_contacto">Pessoa de Contato:</label>
                <input type="text" name="pessoa_contacto" class="form-control" placeholder="Pessoa de contato relacionada ao incidente">
            </div>
            <div class="form-group">
                <label for="nivel">Nível:</label>
                <input type="text" name="nivel" class="form-control" placeholder="Nível do incidente">
            </div>
            <div class="form-group">
                <label for="estado">Estado:</label>
                <select name="estado" class="form-control">
                    <option value="1">Ativo</option>
                    <option value="0">Inativo</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
    </div>
@endsection
