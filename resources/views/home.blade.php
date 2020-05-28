@extends('maestra')
@section("titulo", "Inicio")
@section('contenido')
    <div class="col-12 text-center">
        <h1>Bienvenido {{Auth::user()->nombre}}</h1>
    </div>
    @foreach([
    ["productos", "ventas", "vender"],
    ["clientes","usuarios"]
    ] as $modulos)
        <div class="col-12 pb-1">
            <div class="row" style="text-align: center;">
                @foreach($modulos as $modulo)
                    <div class="col-12 col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">
                                    {{$modulo === "acerca_de" ? "Acerca de" : ucwords($modulo)}}
                                </h5>
                                <a href="{{route("$modulo.index")}}" class="btn btn-success">
                                    Ir a&nbsp;{{$modulo === "acerca_de" ? "Acerca de" : ucwords($modulo)}}
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endforeach
@endsection
