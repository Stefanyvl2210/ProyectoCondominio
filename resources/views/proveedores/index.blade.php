@extends('layouts.app');

@section('content')
  <div class="container">
    <div class="row">
      <div class="col">
        <h1>Lista de proveedores</h1>
        <table class="table">
          <tr>
            <td><h4>Id</h4></td>
            <td><h4>Empresa</h4></td>
            <td><h4>Producto o Servicio</h4></td>
            <td><h4>Contacto</h4></td>
            <td><h4>Telefono</h4></td>
            <td><h4>Direccion</h4></td>
            <td><h4>Pagos</h4></td>
          </tr>
          @foreach ($proveedores as $proveedor)
            <tr>
              <td>{{$proveedor->id}}</td>
              <td>{{$proveedor->empresa}}</td>
              <td>{{$proveedor->producto_servicio}}</td>
              <td>{{$proveedor->contacto}}</td>
              <td>{{$proveedor->telefono}}</td>
              <td>{{$proveedor->direccion}}</td>
              <td><a href="/reporte_proveedores/{{$proveedor->id}}">Ver</a></td>

              <td><a class="btn btn-secondary" href="/reporte_proveedores/{{$proveedor->id}}/edit">Editar</a></td>
              <td><a class="btn btn-primary" href="/reporte_proveedores/{{$proveedor->id}}/delete" >Eliminar</a></td>

            </tr>
          @endforeach
        </table>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <td><a class="btn btn-primary" href="/reporte_proveedores/create">Agregar proveedor</a></td>
      </div>
    </div>
  </div>

@endsection()
