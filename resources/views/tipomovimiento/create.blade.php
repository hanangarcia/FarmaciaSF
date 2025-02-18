@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Crear Tipo de Movimiento</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('tipomovimiento.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre del Tipo de Movimiento</label>
            <input type="text" name="nombre" class="form-control" value="{{ old('nombre') }}" required>
        </div>
        <button type="submit" class="btn btn-success">Guardar</button>
       
    </form>
</div>
@endsection