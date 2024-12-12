@extends('Home.dashboard')

@section('content')
<div class="container">
    
                    <div class="row mb-3">
                        <h1 class="my-2">Lista de Incidentes</h1>
                        <div class="col-md-6 offset-md-6">
                            <!-- Botão "Novo" -->
                            <div class="d-flex justify-content-end">
                                <a href="{{ route('incidentes.create') }}" class="btn btn-success"> Novo</a>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 mx-auto">
                            <div id="incidenteData" class="table-responsive">
                                <table class="table table-striped">
                                    <thead class="bg-success text-white">
                                        <tr>
                                            <th >Descrição</th>
                                            <th >Arquivo</th>
                                            <th >Local</th>
                                            <th class="text-center" >Nome</th>
                                            <th >Contato</th>
                                            <th >Nível</th>
                                            <th >Estado</th>
                                            <th  colspan="3">Ações</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($incidentes as $incidente)
                                            <tr>
                                                <td>{{ $incidente->descricao }}</td>
                                                <td>{{ $incidente->arquivo }}</td> <!--configurar para poder receber aquivos e criar uma logica de armazenamento no storage ou public e na base de dados  -->
                                                <td>{{ $incidente->local }}</td>
                                                <td class="text-center"  >{{ $incidente->nome }}</td>
                                                <td>{{ $incidente->pessoa_contacto }}</td>  <!-- apagar na migration o 'pessoa_contacto' para contanto somente -->
                                                <td>{{ $incidente->nivel }}</td>
                                                <td>{{ $incidente->estado ? 'Ativo' : 'Inativo' }}</td>  <!--aplicar tres estados como pendente, em curso e concluido... em que ele so deve receber o feedback do departamento -->
                                                <!-- <td>{{ $incidente->alocar }}</td> alocar incidentes para o departamento atraves de um clique que o helpdesk for a efetuar  -->
                                                <td>
                                                    <a href="{{ route('associardep.associar', $incidente->id) }}" class="btn btn-warning"><i class="fas fa-eye"></i></a>
                                                    <a href="{{ route('incidentes.show', $incidente->id) }}" class="btn btn-warning"><i class="fas fa-eye"></i></a>

                                                    <a href="{{ route('incidentes.edit', $incidente->id) }}" class="btn btn-primary"><i class="fas fa-edit"></i> </a>
                                                    <form action="{{ route('incidentes.destroy', $incidente->id) }}" method="POST" style="display: inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i> </button>
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

<!-- Essa e a view de parametrizacao na qual os criterios definidos a cima poderam constar em uma outra view de visualizacao -->