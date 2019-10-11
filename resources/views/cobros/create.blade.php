@extends('layouts.app');

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Registro de cobro</h1>
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
                <form action="{{route('cobros.store',['id'=>$inmueble->id])}}" method="post">
                    @csrf
                    <div class="form-group">

                        <label for="mes">Mes:</label>
                        <select name="mes" class="form-control" required>
                            @foreach($meses as $mes)
                                <option value="{{$mes}}">
                                    {{\Illuminate\Support\Str::title($mes)}}
                                </option>
                            @endforeach

                        </select>

                        <label for="descripcion">Descripcion:</label>
                        <input type="text" name="descripcion" id="descripcion" required class="form-control"
                               value="{{old('descripcion')}}">

                        <label for="monto">Monto:</label>
                        <input type="number" name="monto" id="monto" required class="form-control"
                               value="{{old('monto')}}">

                    </div>
                    <div class="pull-left">
                        <button class="btn btn-primary" type="submit">Registrar</button>
                        <a class="btn btn-secondary" href="{{route('inmueble.index')}}">
                            Regresar
                        </a>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection()
