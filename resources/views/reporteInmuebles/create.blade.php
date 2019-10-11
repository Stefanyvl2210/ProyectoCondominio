@extends('layouts.app');

@section('content')
  <div class="container">
    <div class="row">
      <div class="col">
        <h1>Registro de inmueble</h1>
      </div>
    </div>
    <div class="row">
      <div class="col">

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
        <form action="/reporte_inmuebles" method="post">
          @csrf
          <div class="form-group">
            <label for="tipo">Tipo de inmueble:</label>
            <select name="tipo" id="tipo" class="form-control">
              <option>Casa</option>
              <option>Apartamento</option>
            </select>

            <label for="alicuota">Alicuota:</label>
            <input type="text" name="alicuota" id="alicuota" class="form-control" value="{{old('alicuota')}}">

            <label for="monto_reserva">Monto de reserva:</label>
            <input type="text" name="monto_reserva" id="monto_reserva" class="form-control" value="{{old('monto_reserva')}}">

            <label for="pago">Pago:</label>
            <input type="text" name="pago" id="pago" class="form-control" value="{{old('pago')}}">
          </div>
          <button class="btn btn-primary" type="submit">Registrar</button>
          <a class="btn btn-secondary" href="/home">Regresar</a>
        </form>
      </div>
    </div>

  </div>
@endsection()
