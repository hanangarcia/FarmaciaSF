@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Marcas</h1>
    <a href="{{ route('marca.create') }}" class="btn btn-primary">Nueva marca</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($marcas as $marca)
            <tr>
                <td>{{ $marca->id }}</td>
                <td>{{ $marca->nombre }}</td>
                <td>
                    <a href="{{ route('marca.show', $marca->id) }}" class="btn btn-info">Ver</a>
                    <a href="{{ route('marca.edit', $marca->id) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('marca.destroy', $marca->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro?')">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection