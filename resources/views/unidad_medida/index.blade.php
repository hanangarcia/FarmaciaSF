@extends('layouts.app')

@section('content')
<div class="conteiner">
    <div class="col-md-12">
    <table class="table table-info table-striped">
  <thead>
    <tr>
    <th scope="col">Id</th>
      <th scope="col">Unidades de Medida</th>
     
    </tr>
  </thead>
  <tbody>
  @foreach($unidadMedidas as $um)
  <!-- tr es para las filas y td son las columnas de la tabla-->
    <tr>   
        <td>{{$um->id}}</td>    
        <td>{{strtoupper($um->nombre)}}</td>
    </tr>
  @endforeach
  </tbody>
</table>
    </div>
  

</div>

@endsection