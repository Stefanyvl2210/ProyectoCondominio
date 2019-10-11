@extends('layouts.app')

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
                    @foreach ($inmuebles as $inmueble)
                        <tr>
                            <td>{{$inmueble->id}}</td>
                            <td>{{$inmueble->tipo}}</td>
                            <td>{{$inmueble->alicuota}}</td>
                            <td>{{$inmueble->monto_reserva}}</td>
                            <td>
                                <a href="{{route('cobros.index',['inmueble'=>$inmueble->id])}}">
                                    Ver
                                </a>
                            </td>
                            <td>{{$inmueble->created_at}}</td>
                            <td>
                                <a class="btn btn-secondary"
                                   href="{{route('inmueble.edit',['inmueble'=> $inmueble->id])}}">
                                    Editar
                                </a>
                            </td>
                            <td>
                                <form action="{{route('inmueble.delete',['inmueble'=> $inmueble->id])}}" method="post">
                                    @method('delete')
                                    @csrf
                                    <button class="btn btn-primary" type="submit">
                                        Eliminar
                                    </button>
                                </form>
                            </td>

                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <td>
                    <a class="btn btn-primary"
                       href="{{route('inmueble.create')}}"
                    >
                        Agregar inmueble
                    </a>
                </td>
            </div>
        </div>
    </div>

@endsection()
