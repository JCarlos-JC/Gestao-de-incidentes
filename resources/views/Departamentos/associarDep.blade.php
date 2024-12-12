@extends('Home.dashboard')

@section('content')
    <div class="container">
        <h2>Associar Departamento</h2>
        <form action="/Departamentos/associarDep" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="incidente_id" value="{{ $incidente->id }}">
            <div class="form-group">
                <label for="departamento_id">Departamento:</label>
                <select class="form-control" name="departamento_id" id="departamento_id">   
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Associar</button>
        </form>
       
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
       
        $.ajax({
            url: '/AssociardepartamentoController', 
            type: 'GET',
            success: function(response) {
               
                $('#departamento_id').empty();
                
                
                $.each(response, function(key, value) {
                    $('#departamento_id').append($('<option>', {
                        value: value.id,
                        text: value.nome 
                    }));
                });
            }
        });
    });
</script>
@endsection