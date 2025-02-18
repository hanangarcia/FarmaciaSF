@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles de la marca</h1>
    <div class="card">
        <div class="card-header">
            Información de la marca
        </div>
        <div class="card-body">
            <p><strong>ID:</strong> {{ $marca->id }}</p>
            <p><strong>Nombre:</strong> {{ $marca->nombre }}</p>
            
            <a href="{{ route('marca.index') }}" class="btn btn-secondary">Volver a la lista</a>
            <a href="{{ route('marca.edit', $marca->id) }}" class="btn btn-warning">Editar</a>
        </div>
    </div>
</div>
@endsection