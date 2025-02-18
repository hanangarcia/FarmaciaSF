@extends('layouts.app')

@section('content')

<table class="table table-dark table-striped">
  <thead>
    <tr>
    <th scope="col">Id</th>
      <th scope="col">Almacenes</th>
     
    </tr>
  </thead>
  <tbody>
  @foreach($almacenes as $almacen)
    <tr>
    <td>{{$almacen->id}}</td>    
      <td>{{$almacen->nombre}}</td>
   
    </tr>
  @endforeach
  </tbody>
</table>
@endsection