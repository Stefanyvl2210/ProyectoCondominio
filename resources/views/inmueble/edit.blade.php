@extends('layouts.app');

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Editar inmueble {{$inmueble->id}}</h1>
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
                <form action="{{route('inmueble.update',['id'=>$inmueble->id])}}" method="post">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="tipo">Tipo de inmueble:</label>
                        <select name="tipo" id="tipo" class="form-control">
                            <option value="casa" @if($inmueble->tipo === 'casa') selected @endif >
                                Casa
                            </option>
                            <option value="apartamento" @if($inmueble->tipo === 'apartamento') selected @endif >
                                Apartamento
                            </option>
                        </select>
                    </div>
                    <button class="btn btn-primary" type="submit">
                        Guardar
                    </button>
                    <a class="btn btn-secondary" href="{{route('inmueble.index')}}">
                        Regresar
                    </a>
                </form>
            </div>
        </div>

    </div>
@endsection()
