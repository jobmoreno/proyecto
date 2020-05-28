@extends("maestra")
@section("titulo", "Usuarios")
@section("contenido")
    <div class="row">
        <div class="col-12">
            <h1>Usuarios <i class="fa fa-users"></i></h1>
            <a href="{{route("usuarios.create")}}" class="btn btn-success mb-2">Agregar</a>
            @include("notificacion")
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Direccion</th>
                        <th>Ciudad</th>
                        <th>Telefono</th>
                        <th>Cargo</th>
                        <th>Salario</th>
                        <th>Correo electrónico</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($usuarios as $usuario)
                        <tr>
                            <td>{{$usuario->nombre}}</td>
                            <td>{{$usuario->direccion}}</td>
                            <td>{{$usuario->ciudad}}</td>
                            <td>{{$usuario->telefono}}</td>
                            <td>{{$usuario->cargo}}</td>
                            <td>{{$usuario->salario}}</td>
                            <td>{{$usuario->email}}</td>
                            
                            <td>
                                <a class="btn btn-warning" href="{{route("usuarios.edit",[$usuario])}}">
                                    <i class="fa fa-edit"></i>
                                </a>
                            </td>
                            <td>
                                <form action="{{route("usuarios.destroy", [$usuario])}}" method="post">
                                    @method("delete")
                                    @csrf
                                    <button type="submit" class="btn btn-danger">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
