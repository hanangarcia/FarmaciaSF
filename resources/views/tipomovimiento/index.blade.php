@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tipos de Movimiento</h1>
    <a href="{{ route('tipomovimiento.create') }}" class="btn btn-primary">Nuevo Tipo de Movimiento</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tipoMovimientos as $tipoMovimiento)
            <tr>
                <td>{{ $tipoMovimiento->id }}</td>
                <td>{{ $tipoMovimiento->nombre }}</td>
                <td>
                    <a href="{{ route('tipomovimiento.show', $tipoMovimiento->id) }}" class="btn btn-info">Ver</a>
                    <a href="{{ route('tipomovimiento.edit', $tipoMovimiento->id) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('tipomovimiento.destroy', $tipoMovimiento->id) }}" method="POST" style="display:inline;">
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