@extends('layouts.app');

@section('content')
  <div class="container">
    <div class="row">
      <div class="col">
        <h1>Registro de pago</h1>
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
        <form action="/reporte_proveedores/{{$reporte->id}}/pagos" method="post">
          @csrf
          <div class="form-group">

            <input type="hidden" name="proveedor_id" id="proveedor_id" class="form-control" value="{{$reporte->id}}">

            <label for="mes">Mes:</label>
            <input type="text" name="mes" id="mes" class="form-control" value="{{old('mes')}}">

            <label for="descripcion">Descripcion:</label>
            <input type="text" name="descripcion" id="descripcion" class="form-control" value="{{old('descripcion')}}">

            <label for="monto">Monto:</label>
            <input type="text" name="monto" id="monto" class="form-control" value="{{old('monto')}}">

          </div>
          <table class="table">
            <tr>
              <td><button class="btn btn-primary" type="submit">Registrar</button></td>
              <td><a class="btn btn-secondary" href="/reporte_proveedores/{{$reporte->id}}">Regresar</a></td>
            </tr>
          </table>
        </form>
      </div>
    </div>

  </div>
@endsection()
