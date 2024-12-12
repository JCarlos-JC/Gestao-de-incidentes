@extends('Home.dashboard')

@section('content')
    <div class="container">
        <h1>Criar Novo Incidente</h1>
        <form action="{{ route('incidentes.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="d-flex justify-content-end">
                <a href="{{ route('incidentes.index')}}" class="btn btn-success">Listar</a>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="nome">Nome:</label>
                        <input type="text" name="nome" class="form-control" placeholder="Nome da pessoa de contacto">
                    </div>
                </div>



                <div class="col-md-4">
                    <div class="form-group">
                        <label for="local">Local:</label>
                        <input type="text" name="local" class="form-control" placeholder="Local do incidente">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="pessoa_contacto">Pessoa de Contato:</label>
                        <input type="text" name="pessoa_contacto" class="form-control" placeholder="Contacto">
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="nivel">Nível:</label>
                        <select name="nivel" class="form-control">
                            <option value="Baixo">Baixo</option>
                            <option value="Médio">Médio</option>
                            <option value="Alto">Alto</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="arquivo">Arquivo:</label>
                        <input type="file" name="arquivo" class="form-control-file">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="descricao" class="col-md-4 col-form-label text-md-right">Descrição:</label>
                        <textarea class="form-control" id="descricao" name="descricao" rows="2" cols="50"></textarea>
                    </div>
                </div>
              
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="estado">Estado:</label>
                        <select name="estado" class="form-control">
                            <option value="1">Ativo</option>
                            <option value="0">Inativo</option>
                        </select>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-success">Salvar</button>
        </form>
    </div>
@endsection
