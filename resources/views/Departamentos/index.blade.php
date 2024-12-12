@extends('Home.dashboard')

@section('content')
    <div class="container">
        <h2 class="my-2">Lista de Departamentos</h2>
        <div class="d-flex justify-content-end my-2">
            <button type="button" class="btn btn-success" id="btn-novo">Novo</button>
        </div>

        <!-- Formulário de criação de departamento -->
        <div id="form-novo" class="mb-3" style="display: none;">
        <div class="card card-body">
            <h3>Novo Departamento</h3>
            <form action="{{ route('departamentos.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" class="form-control" placeholder="Nome do departamento">
                </div>
                <button type="submit" class="btn btn-primary">Salvar</button>
                <button type="button" class="btn btn-secondary ml-2" id="btn-cancelar">Cancelar</button>
            </form>
        </div>
      </div>
        <!-- Formulário de edição de departamento -->
        <div id="form-edit" class="mb-3" style="display: none;">
        <div class="card card-body">
            <h3>Editar Departamento</h3>
            <form action="" method="POST" id="form-edit-departamento">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="nome_edit">Nome:</label>
                    <input type="text" name="nome" class="form-control" id="nome_edit" placeholder="Nome do departamento">
                </div>
                <button type="submit" class="btn btn-primary">Salvar</button>
                <button type="button" class="btn btn-secondary ml-2" id="btn-cancelar-edit">Cancelar</button>
            </form>
        </div>
      </div>
        <table class="table table-striped table-hover">
            <thead class="bg-success text-light">
                <tr>
                    <th>Nome</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($departamentos as $departamento)
                    <tr>         
                        <td>{{ $departamento->nome }}</td>
                        <td>
                            <a href="#" class="btn btn-primary edit-departamento" data-id="{{ $departamento->id }}" data-nome="{{ $departamento->nome }}"><i class="fas fa-edit"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Exibir e ocultar formulário de criação ao clicar no botão Novo
            document.getElementById('btn-novo').addEventListener('click', function() {
                var formNovo = document.getElementById('form-novo');
                if (formNovo.style.display === 'none') {
                    formNovo.style.display = 'block';
                    document.getElementById('form-edit').style.display = 'none';
                } else {
                    formNovo.style.display = 'none';
                }
            });

            // Exibir formulário de edição ao clicar no botão Editar
            var editButtons = document.querySelectorAll('.edit-departamento');
            editButtons.forEach(function(button) {
                button.addEventListener('click', function() {
                    var id = this.dataset.id;
                    var nome = this.dataset.nome;
                    document.getElementById('nome_edit').value = nome;
                    document.getElementById('form-edit-departamento').action = '/departamentos/' + id;
                    document.getElementById('form-edit').style.display = 'block';
                    document.getElementById('form-novo').style.display = 'none';
                });
            });

            // Ocultar formulário de criação ao clicar no botão Cancelar (criação)
            document.getElementById('btn-cancelar').addEventListener('click', function() {
                document.getElementById('form-novo').style.display = 'none';
            });

            // Ocultar formulário de edição ao clicar no botão Cancelar (edição)
            document.getElementById('btn-cancelar-edit').addEventListener('click', function() {
                document.getElementById('form-edit').style.display = 'none';
            });
        });
    </script>
@endsection
