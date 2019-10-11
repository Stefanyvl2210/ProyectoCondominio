@extends('layouts.app');

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Inmueble {{$inmueble->id}}: {{$inmueble->tipo}}</h1>
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
                        <td>Mora (1%)</td>
                        <td>Registro</td>
                    </tr>

                    <select class="opcion" name="mes" id="mes" class="form-control">
                        <option id="opcion">- Seleccione un mes -</option>
                        @foreach ($meses as $mes)
                            <option value="{{$mes}}"
                                    @if($actualMes && $actualMes === $mes) selected @endif>{{$mes}}</option>
                        @endforeach
                    </select>
                    @foreach ($cobros as $cobro)
                        <tr>
                            <td>{{$cobro->id}}</td>
                            <td>{{$cobro->mes}}</td>
                            <td>{{$cobro->descripcion}}</td>
                            <td>{{$cobro->monto}}</td>
                            <td>{{$cobro->mora}}</td>
                            <td>{{$cobro->created_at}}</td>
                            <td><a class="btn btn-primary"
                                   href="{{route('cobros.edit',['inmueble'=>$inmueble->id,'cobro'=>$cobro->id])}}"
                                >
                                    Editar
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    <tr>
                        <td>
                            <a class="btn btn-primary" href="{{route('cobros.create',['inmueble'=>$inmueble->id])}}">
                                Agregar cobro
                            </a>
                        </td>
                        <td>
                            <a class="btn btn-secondary" href="{{route('inmueble.index')}}">
                                Regresar
                            </a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript">
        $(document).ready(function () {
            $('.opcion').on('change', function () {
                let route = '{{route('cobros.index',['inmueble'=> $inmueble->id, 'mes'=> ':id'])}}';
                let link = $('<a>', {
                    text: 'This is blah',
                    title: 'Blah',
                    hidden: true,
                    href: route.replace(':id', $(this).val())
                });
                link[0].click();
            });
        });
    </script>
@endsection
