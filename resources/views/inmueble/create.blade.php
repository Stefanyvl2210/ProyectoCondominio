@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Registro de inmueble</h1>
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
                <form action="{{route('inmueble.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="tipo">Tipo de inmueble:</label>
                        <select name="tipo" id="tipo" class="form-control">
                            <option value="casa">Casa</option>
                            <option value="apartamento">Apartamento</option>
                        </select>

                        <label for="alicuota">Alicuota:</label>
                        <input type="number" name="alicuota" id="alicuota" class="form-control"
                               value="{{old('alicuota')}}">
                    </div>
                    <button class="btn btn-primary" type="submit">
                        Registrar
                    </button>
                    <a class="btn btn-secondary" href="{{route('home')}}">
                        Regresar
                    </a>
                </form>
            </div>
        </div>
    </div>
@endsection()
