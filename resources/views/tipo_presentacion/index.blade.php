@extends('layouts.app')

@section('content')
<div class="conteiner">
    <div class="col-md-12">
    <table class="table table-success table-striped">
  <thead>
    <tr>
    <th scope="col">Id</th>
      <th scope="col">Tipo Presentaciones</th>
     
    </tr>
  </thead>
  <tbody>
  @foreach($tipoPresentaciones as $tp)
  <!-- tr es para las filas y td son las columnas de la tabla-->
    <tr>   
        <td>{{$tp->id}}</td>    
        <td>{{strtoupper($tp->nombre)}}</td>
    </tr>
  @endforeach
  </tbody>
</table>
    </div>
  

</div>

@endsection