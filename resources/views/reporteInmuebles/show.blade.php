@extends('layouts.app');

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Inmueble {{$reporte->id}}: {{$reporte->tipo}}</h1>
            <h4>Gastos mensuales</h4>
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
                <td>Mora(1%)</td>
                <td>Registro</td>
              </tr>
                
                <select class="opcion" name="mes" id="mes" class="form-control">
                  <option id="opcion">- Seleccione un mes -</option>
                  @foreach ($meses as $mes)
                    <option  id="opcion" value="{{$mes}}">{{$mes}}</option>
                  @endforeach
                </select>
                  @foreach ($reporte->inmuebleCobros as $inmuebleCobro)
                    @if ($inmuebleCobro->mes == 'Enero' || $inmuebleCobro->mes == 'enero')
                      <tr>
                          <td>{{$inmuebleCobro->id}}</td>
                          <td>{{$inmuebleCobro->mes}}</td>
                          <td>{{$inmuebleCobro->descripcion}}</td>
                          <td>{{$inmuebleCobro->monto}}</td>
                          <td>{{$inmuebleCobro->mora}}</td>
                          <td>{{$inmuebleCobro->created_at}}</td>
                          <td><a class="btn btn-primary" href="/reporte_inmuebles/{{$reporte->id}}/cobros/edit/cobro{{$inmuebleCobro->id}}">Editar</a></td>
                      </tr>
                    @endif
                    @if ($inmuebleCobro->mes == 'Febrero' || $inmuebleCobro->mes == 'febrero')
                      <tr>
                          <td>{{$inmuebleCobro->id}}</td>
                          <td>{{$inmuebleCobro->mes}}</td>
                          <td>{{$inmuebleCobro->descripcion}}</td>
                          <td>{{$inmuebleCobro->monto}}</td>
                          <td>{{$inmuebleCobro->mora}}</td>
                          <td>{{$inmuebleCobro->created_at}}</td>
                          <td><a class="btn btn-primary" href="/reporte_inmuebles/{{$reporte->id}}/cobros/edit/cobro{{$inmuebleCobro->id}}">Editar</a></td>
                      </tr>
                    @endif
                    @if ($inmuebleCobro->mes == 'Marzo' || $inmuebleCobro->mes == 'marzo')
                      <tr>
                          <td>{{$inmuebleCobro->id}}</td>
                          <td>{{$inmuebleCobro->mes}}</td>
                          <td>{{$inmuebleCobro->descripcion}}</td>
                          <td>{{$inmuebleCobro->monto}}</td>
                          <td>{{$inmuebleCobro->mora}}</td>
                          <td>{{$inmuebleCobro->created_at}}</td>
                          <td><a class="btn btn-primary" href="/reporte_inmuebles/{{$reporte->id}}/cobros/edit/cobro{{$inmuebleCobro->id}}">Editar</a></td>
                      </tr>
                    @endif
                    @if ($inmuebleCobro->mes == 'Abril' || $inmuebleCobro->mes == 'abril')
                      <tr>
                          <td>{{$inmuebleCobro->id}}</td>
                          <td>{{$inmuebleCobro->mes}}</td>
                          <td>{{$inmuebleCobro->descripcion}}</td>
                          <td>{{$inmuebleCobro->monto}}</td>
                          <td>{{$inmuebleCobro->mora}}</td>
                          <td>{{$inmuebleCobro->created_at}}</td>
                          <td><a class="btn btn-primary" href="/reporte_inmuebles/{{$reporte->id}}/cobros/edit/cobro{{$inmuebleCobro->id}}">Editar</a></td>
                      </tr>
                    @endif
                    @if ($inmuebleCobro->mes == 'Mayo' || $inmuebleCobro->mes == 'mayo')
                      <tr>
                          <td>{{$inmuebleCobro->id}}</td>
                          <td>{{$inmuebleCobro->mes}}</td>
                          <td>{{$inmuebleCobro->descripcion}}</td>
                          <td>{{$inmuebleCobro->monto}}</td>
                          <td>{{$inmuebleCobro->mora}}</td>
                          <td>{{$inmuebleCobro->created_at}}</td>
                          <td><a class="btn btn-primary" href="/reporte_inmuebles/{{$reporte->id}}/cobros/edit/cobro{{$inmuebleCobro->id}}">Editar</a></td>
                      </tr>
                    @endif
                    @if ($inmuebleCobro->mes == 'Junio' || $inmuebleCobro->mes == 'junio')
                      <tr>
                          <td>{{$inmuebleCobro->id}}</td>
                          <td>{{$inmuebleCobro->mes}}</td>
                          <td>{{$inmuebleCobro->descripcion}}</td>
                          <td>{{$inmuebleCobro->monto}}</td>
                          <td>{{$inmuebleCobro->mora}}</td>
                          <td>{{$inmuebleCobro->created_at}}</td>
                          <td><a class="btn btn-primary" href="/reporte_inmuebles/{{$reporte->id}}/cobros/edit/cobro{{$inmuebleCobro->id}}">Editar</a></td>
                      </tr>
                    @endif
                    @if ($inmuebleCobro->mes == 'Julio' || $inmuebleCobro->mes == 'julio')
                      <tr>
                          <td>{{$inmuebleCobro->id}}</td>
                          <td>{{$inmuebleCobro->mes}}</td>
                          <td>{{$inmuebleCobro->descripcion}}</td>
                          <td>{{$inmuebleCobro->monto}}</td>
                          <td>{{$inmuebleCobro->mora}}</td>
                          <td>{{$inmuebleCobro->created_at}}</td>
                          <td><a class="btn btn-primary" href="/reporte_inmuebles/{{$reporte->id}}/cobros/edit/cobro{{$inmuebleCobro->id}}">Editar</a></td>
                      </tr>
                    @endif
                    @if ($inmuebleCobro->mes == 'Agosto' || $inmuebleCobro->mes == 'agosto')
                      <tr>
                          <td>{{$inmuebleCobro->id}}</td>
                          <td>{{$inmuebleCobro->mes}}</td>
                          <td>{{$inmuebleCobro->descripcion}}</td>
                          <td>{{$inmuebleCobro->monto}}</td>
                          <td>{{$inmuebleCobro->mora}}</td>
                          <td>{{$inmuebleCobro->created_at}}</td>
                          <td><a class="btn btn-primary" href="/reporte_inmuebles/{{$reporte->id}}/cobros/edit/cobro{{$inmuebleCobro->id}}">Editar</a></td>
                      </tr>
                    @endif
                    @if ($inmuebleCobro->mes == 'Septiembre' || $inmuebleCobro->mes == '<s></s>eptiembre')
                      <tr>
                          <td>{{$inmuebleCobro->id}}</td>
                          <td>{{$inmuebleCobro->mes}}</td>
                          <td>{{$inmuebleCobro->descripcion}}</td>
                          <td>{{$inmuebleCobro->monto}}</td>
                          <td>{{$inmuebleCobro->mora}}</td>
                          <td>{{$inmuebleCobro->created_at}}</td>
                          <td><a class="btn btn-primary" href="/reporte_inmuebles/{{$reporte->id}}/cobros/edit/cobro{{$inmuebleCobro->id}}">Editar</a></td>
                      </tr>
                    @endif
                    @if ($inmuebleCobro->mes == 'Octubre' || $inmuebleCobro->mes == 'octubre')
                      <tr>
                          <td>{{$inmuebleCobro->id}}</td>
                          <td>{{$inmuebleCobro->mes}}</td>
                          <td>{{$inmuebleCobro->descripcion}}</td>
                          <td>{{$inmuebleCobro->monto}}</td>
                          <td>{{$inmuebleCobro->mora}}</td>
                          <td>{{$inmuebleCobro->created_at}}</td>
                          <td><a class="btn btn-primary" href="/reporte_inmuebles/{{$reporte->id}}/cobros/edit/cobro{{$inmuebleCobro->id}}">Editar</a></td>
                      </tr>
                    @endif
                    @if ($inmuebleCobro->mes == 'Noviembre' || $inmuebleCobro->mes == 'noviembre')
                      <tr>
                          <td>{{$inmuebleCobro->id}}</td>
                          <td>{{$inmuebleCobro->mes}}</td>
                          <td>{{$inmuebleCobro->descripcion}}</td>
                          <td>{{$inmuebleCobro->monto}}</td>
                          <td>{{$inmuebleCobro->mora}}</td>
                          <td>{{$inmuebleCobro->created_at}}</td>
                          <td><a class="btn btn-primary" href="/reporte_inmuebles/{{$reporte->id}}/cobros/edit/cobro{{$inmuebleCobro->id}}">Editar</a></td>
                      </tr>
                    @endif
                    @if ($inmuebleCobro->mes == 'Diciembre' || $inmuebleCobro->mes == 'diciembre')
                      <tr>
                          <td>{{$inmuebleCobro->id}}</td>
                          <td>{{$inmuebleCobro->mes}}</td>
                          <td>{{$inmuebleCobro->descripcion}}</td>
                          <td>{{$inmuebleCobro->monto}}</td>
                          <td>{{$inmuebleCobro->mora}}</td>
                          <td>{{$inmuebleCobro->created_at}}</td>
                          <td><a class="btn btn-primary" href="/reporte_inmuebles/{{$reporte->id}}/cobros/edit/cobro{{$inmuebleCobro->id}}">Editar</a></td>
                      </tr>
                    @endif
                  @endforeach

                <tr>
                  <td><a class="btn btn-primary" href="/reporte_inmuebles/{{$reporte->id}}/cobros/create">Agregar cobro</a></td>
                  <td><a class="btn btn-secondary" href="/reporte_inmuebles">Regresar</a></td>
                </tr>
            </table>
        </div>
    </div>
</div>
@endsection

@section('scripts')
  <script type="text/javascript">
      $(document).ready(function(){
        $('.opcion').on('change',function(){
          var mesSelect = $(this).val();
          var url = window.location;
          $.ajax({
              url: window.location,
              type: 'POST',
              data:'valorMes='+mesSelect
            });
        });
      });
  </script>
@endsection
