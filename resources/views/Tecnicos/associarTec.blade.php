@extends('Home.dashboard')

@section('content')
    <div class="container">
        <h2>Novo Técnico</h2>
        <form action="/Tecnicos/associarTec" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="associardepartamento_id" value="{{ $incidente->id }}">
            
            <div class="form-group">
                <label for="tecnico_id">Nome do Técnico:</label>
                <select class="form-control" id="tecnico_id" name="tecnico_id">
                   
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Associar</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
       
        $.ajax({
            url: '/AssociartecnicooController', 
            type: 'GET',
            success: function(response) {
               
                $('#tecnico_id').empty();
                
                
                $.each(response, function(key, value) {
                    $('#tecnico_id').append($('<option>', {
                        value: value.id, 
                        text: value.nome 
                    }));
                });
            }
        });
    });
</script>
@endsection
