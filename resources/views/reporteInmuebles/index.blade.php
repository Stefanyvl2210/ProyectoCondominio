@extends('layouts.app');

@section('content')
  <div class="container">
    <div class="row">
      <div class="col">
        <h1>Lista de inmuebles</h1>
        <table class="table">
          <tr>
            <td><h4>Id</h4></td>
            <td><h4>Tipo</h4></td>
            <td><h4>Alicuota</h4></td>
            <td><h4>Monto de reserva</h4></td>
            <td><h4>Cobros</h4></td>
            <td><h4>Registro</h4></td>
          </tr>
          @foreach ($reporteInmuebles as $reporte)
            <tr>
              <td>{{$reporte->id}}</td>
              <td>{{$reporte->tipo}}</td>
              <td>{{$reporte->alicuota}}</td>
              <td>{{$reporte->monto_reserva}}</td>
              <td><a href="/reporte_inmuebles/{{$reporte->id}}">Ver</a></td>
              <td>{{$reporte->created_at}}</td>

              <td><a class="btn btn-secondary" href="/reporte_inmuebles/{{$reporte->id}}/edit">Editar</a></td>
              <td><a class="btn btn-primary" href="/reporte_inmuebles/{{$reporte->id}}/delete" >Eliminar</a></td>

            </tr>
          @endforeach
        </table>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <td><a class="btn btn-primary" href="/reporte_inmuebles/create">Agregar inmueble</a></td>
      </div>
    </div>
  </div>

@endsection()
