@extends('layouts.app');

@section('content')
  <div class="container">
    <div class="row">
      <div class="col">
        <h1>Editar inmueble {{$reporte->id}}</h1>
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
        <form action="/reporte_inmuebles/{{$reporte->id}}" method="post">
          @csrf
          @method('put')
          <div class="form-group">
            <label for="tipo">Tipo de inmueble:</label>
            <select name="tipo" id="tipo" class="form-control">
              <option>Casa</option>
              <option>Apartamento</option>
            </select>
            <label for="monto_reserva">Monto de reserva:</label>
            <input type="text" name="monto_reserva" id="monto_reserva" class="form-control" value="{{old('monto_reserva')}}">

          </div>
          <button class="btn btn-primary" type="submit">Guardar</button>
          <a class="btn btn-secondary" href="/reporte_inmuebles">Regresar</a>
        </form>
      </div>
    </div>

  </div>
@endsection()
