<!-- resources/views/tecnicos/edit.blade.php -->

@extends('Home.dashboard')

@section('content')
    <div class="container">
        <h2>Editar Técnico</h2>
        <form action="{{ route('tecnicos.update', $tecnico->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nome">Nome do Técnico:</label>
                <input type="text" class="form-control" id="nome" name="nome" value="{{ $tecnico->nome }}">
            </div>
            <div class="form-group">
                <label for="departamento_id">Departamento:</label>
                <select class="form-control" id="departamento_id" name="departamento_id">
                    @foreach($departamentos as $departamento)
                        <option value="{{ $departamento->id }}" {{ $tecnico->departamento_id == $departamento->id ? 'selected' : '' }}>{{ $departamento->nome }}</option>
                    @endforeach
               
