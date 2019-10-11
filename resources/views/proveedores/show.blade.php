@extends('layouts.app');

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Proveedor {{$reporte->empresa}}: </h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table">
              <tr>
                <td>Id</td>
                <td>Mes</td>
                <td>Descripcion</td>
                <td>Monto</td>
                <td>Registro</td>
              </tr>
                @foreach ($reporte->proveedorPagos as $proveedorPago)
                <tr>
                    <td>{{$proveedorPago->id}}</td>
                    <td>{{$proveedorPago->mes}}</td>
                    <td>{{$proveedorPago->descripcion}}</td>
                    <td>{{$proveedorPago->monto}}</td>
                    <td>{{$proveedorPago->created_at}}</td>
                    <td><a class="btn btn-primary" href="/reporte_proveedores/{{$reporte->id}}/pagos/edit/pago{{$proveedorPago->id}}">Editar</a></td>
                </tr>
                @endforeach
                <tr>
                  <td><a class="btn btn-primary" href="/reporte_proveedores/{{$reporte->id}}/pagos/create">Agregar pago</a></td>
                  <td><a class="btn btn-secondary" href="/reporte_proveedores">Regresar</a></td>
                </tr>
            </table>
        </div>
    </div>
</div>
@endsection()
