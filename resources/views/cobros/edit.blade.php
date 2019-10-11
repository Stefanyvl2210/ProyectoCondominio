@extends('layouts.app');

@section('content')
  <div class="container">
    <div class="row">
      <div class="col">
        <h1>Editar cobro {{$reporteC->id}}</h1>
      </div>
    </div>
    <div class="row">
      <div class="col">
        @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
              @endforeach
            </ul>
          </div>
        @endif
        <form action="/reporte_inmuebles/{{$reporteI->id}}/cobros/{{$reporteC->id}}" method="post">
          @csrf
          @method('put')
          <div class="form-group">

            <input type="hidden" name="inmueble_id" id="inmueble_id" class="form-control" value="{{$reporteI->id}}">

            <label for="mes">Mes:</label>
            <input type="text" name="mes" id="mes" class="form-control" value="{{old('mes')}}">

            <label for="descripcion">Descripcion:</label>
            <input type="text" name="descripcion" id="descripcion" class="form-control" value="{{old('descripcion')}}">

            <label for="monto">Monto:</label>
            <input type="text" name="monto" id="monto" class="form-control" value="{{old('monto')}}">

          </div>
          <button class="btn btn-primary" type="submit">Guardar</button>
          <a class="btn btn-secondary" href="/reporte_inmuebles/{{$reporteI->id}}">Regresar</a>
        </form>
      </div>
    </div>

  </div>
@endsection()
