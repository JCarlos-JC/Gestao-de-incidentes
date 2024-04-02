<!-- resources/views/incidentes/show.blade.php -->

@extends('Home.dashboard')

@section('content')
    <h1>Detalhes do Incidente</h1>
    <ul>
        <li><strong>Descrição:</strong> {{ $incidente->descricao }}</li>
        <li><strong>Arquivo:</strong> {{ $incidente->arquivo }}</li>
        <li><strong>Local:</strong> {{ $incidente->local }}</li>
        <li><strong>Nome:</strong> {{ $incidente->nome }}</li>
        <li><strong>Pessoa de Contato:</strong> {{ $incidente->pessoa_contacto }}</li>
        <li><strong>Nível:</strong> {{ $incidente->nivel }}</li>
        <li><strong>Estado:</strong> {{ $incidente->estado ? 'Ativo' : 'Inativo' }}</li>
    </ul>
@endsection
