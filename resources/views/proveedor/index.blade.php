@extends('layouts.app')

@section('content')

<table class="table table-dark table-striped">
  <thead>
    <tr>
    <th scope="col">Id</th>
      <th scope="col">Proveedores</th>
     
    </tr>
  </thead>
  <tbody>
  @foreach($proveedores as $proveedor)
    <tr>
    <td>{{$proveedor->id}}</td>    
      <td>{{$proveedor->nombre}}</td>
   
    </tr>
  @endforeach
  </tbody>
</table>
@endsection