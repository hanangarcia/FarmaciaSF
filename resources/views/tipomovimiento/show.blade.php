@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles del Tipo de Movimiento</h1>
    <div class="card">
        <div class="card-header">
            Información del Tipo de Movimiento
        </div>
        <div class="card-body">
            <p><strong>ID:</strong> {{ $tipo->id }}</p>
            <p><strong>Nombre:</strong> {{ $tipo->nombre }}</p>
            
            <a href="{{ route('tipomovimiento.index') }}" class="btn btn-secondary">Volver a la lista</a>
            <a href="{{ route('tipomovimiento.edit', $tipo->id) }}" class="btn btn-warning">Editar</a>
        </div>
    </div>
</div>
@endsection