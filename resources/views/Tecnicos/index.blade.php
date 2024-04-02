@extends('Home.dashboard')

@section('content')
    <div class="container">
        <h2>Lista de Técnicos</h2>
        <a href="{{ route('tecnicos.create') }}" class="btn btn-success my-2"><i class="fas fa-plus"></i></a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Departamento</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tecnicos as $tecnico)
                    <tr>
                        <td>{{ $tecnico->id }}</td>
                        <td>{{ $tecnico->nome }}</td>
                        <td>{{ $tecnico->departamento->nome }}</td>
                        <td>
                            <a href="{{ route('tecnicos.show', $tecnico->id) }}" class="btn btn-info"><i class="fas fa-eye"></i></a>
                            <a href="{{ route('tecnicos.edit', $tecnico->id) }}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                            <form action="{{ route('tecnicos.destroy', $tecnico->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
