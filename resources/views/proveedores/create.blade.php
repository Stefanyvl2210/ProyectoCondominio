@extends('layouts.app');

@section('content')
  <div class="container">
    <div class="row">
      <div class="col">
        <h1>Registro de proveedores</h1>
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
        <form action="/reporte_proveedores" method="post">
          @csrf
          <div class="form-group">
            <label for="empresa">Empresa:</label>
            <input type="text" name="empresa" id="empresa" class="form-control" value="{{old('empresa')}}">

            <label for="producto_servicio">Producto o Servicio:</label>
            <input type="text" name="producto_servicio" id="producto_servicio" class="form-control" value="{{old('producto_servicio')}}">

            <label for="contacto">Contacto:</label>
            <input type="text" name="contacto" id="contacto" class="form-control" value="{{old('contacto')}}">

            <label for="telefono">Telefono:</label>
            <input type="text" name="telefono" id="telefono" class="form-control" value="{{old('telefono')}}">

            <label for="direccion">Direccion:</label>
            <input type="text" name="direccion" id="direccion" class="form-control" value="{{old('direccion')}}">

            <label for="email">Correo:</label>
            <input type="text" name="email" id="email" class="form-control" value="{{old('email')}}">
          </div>
          <button class="btn btn-primary" type="submit">Registrar</button>
          <a class="btn btn-secondary" href="/home">Regresar</a>
        </form>
      </div>
    </div>

  </div>
@endsection()
