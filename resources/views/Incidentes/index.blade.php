@extends('Home.dashboard')

@section('content')
<div class="container">
    <div class="card bg-secondary shadow">
        <div class="card-body">
            <div class="card bg-light rounded">
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-md-6 offset-md-6">
                            <!-- Botão "Novo" -->
                            <div class="d-flex justify-content-end">
                                <a href="{{ route('incidentes.create') }}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Novo</a>
                            </div>
                        </div>
                    </div>

                    <h1>Lista de Incidentes</h1>
                    <div class="row">
                        <div class="col-md-6 offset-md-3">
                            <!-- Barra de pesquisa -->
                            <form id="searchForm" action="{{ route('search.incidentes') }}" method="GET" class="form-inline justify-content-center">
                                <div class="input-group">
                                    <input id="searchInput" type="text" class="form-control" placeholder="Pesquisar por descrição" name="search" value="{{ request()->get('search') }}">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="submit"><i class="fas fa-search"></i> Pesquisar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-10 mx-auto">
                            <div id="incidenteData" class="table-responsive">
                                <table class="table table-striped">
                                    <thead class="bg-primary text-white">
                                        <tr>
                                            <th class="text-center">Descrição</th>
                                            <th class="text-center">Arquivo</th>
                                            <th class="text-center">Local</th>
                                            <th class="text-center">Nome</th>
                                            <th class="text-center">Pessoa de Contato</th>
                                            <th class="text-center">Nível</th>
                                            <th class="text-center">Estado</th>
                                            <th class="text-center" colspan="3">Ações</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($incidentes as $incidente)
                                            <tr>
                                                <td>{{ $incidente->descricao }}</td>
                                                <td>{{ $incidente->arquivo }}</td>
                                                <td>{{ $incidente->local }}</td>
                                                <td>{{ $incidente->nome }}</td>
                                                <td>{{ $incidente->pessoa_contacto }}</td>
                                                <td>{{ $incidente->nivel }}</td>
                                                <td>{{ $incidente->estado ? 'Ativo' : 'Inativo' }}</td>
                                                <td>
                                                    <a href="{{ route('incidentes.show', $incidente->id) }}" class="btn btn-info"><i class="fas fa-eye"></i> Visualizar</a>
                                                    <a href="{{ route('incidentes.edit', $incidente->id) }}" class="btn btn-primary"><i class="fas fa-edit"></i> Editar</a>
                                                    <form action="{{ route('incidentes.destroy', $incidente->id) }}" method="POST" style="display: inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Excluir</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- Links de paginação -->
                            <div class="d-flex justify-content-center mt-3">
                                {{ $incidentes->links('pagination::bootstrap-4') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $('#searchForm').on('submit', function(event) {
            event.preventDefault(); // Evita o envio do formulário padrão
            var searchText = $('#searchInput').val().trim();
            $.ajax({
                url: $(this).attr('action'),
                type: 'GET',
                data: { search: searchText },
                success: function(response) {
                    $('#incidenteData tbody').html(response); // Atualiza o conteúdo da tabela
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });
        });

        $('#searchInput').on('keyup', function() {
            var searchText = $(this).val().trim();
            $.ajax({
                url: $('#searchForm').attr('action'),
                type: 'GET',
                data: { search: searchText },
                success: function(response) {
                    $('#incidenteData tbody').html(response); // Atualiza o conteúdo da tabela
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });
        });
    });
</script>

@endsection
