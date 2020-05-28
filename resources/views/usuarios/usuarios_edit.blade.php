@extends("maestra")
@section("titulo", "Editar usuario")
@section("contenido")
    <div class="row">
        <div class="col-12">
            <h1>Editar usuario</h1>
            <form method="POST" action="{{route("usuarios.update", [$usuario])}}">
                @method("PUT")
                @csrf
                <div class="form-group">
                    <label class="label">Nombre</label>
                    <input required value="{{$usuario->nombre}}" autocomplete="off" name="name" class="form-control"
                           type="text" placeholder="Nombre">
                </div>
                <div class="form-group">
                    <label class="label">Direccion</label>
                    <input required value="{{$usuario->direccion}}" autocomplete="off" name="direccion" class="form-control"
                           type="text" placeholder="direccion">
                </div>
                <div class="form-group">
                    <label class="label">ciudad</label>
                    <input required value="{{$usuario->ciudad}}" autocomplete="off" name="ciudad" class="form-control"
                           type="text" placeholder="Ciudad">
                </div>
                <div class="form-group">
                    <label class="label">Telefono</label>
                    <input required value="{{$usuario->telefono}}" autocomplete="off" name="telefono" class="form-control"
                           type="text" placeholder="Telefono">
                </div>
                <div class="form-group">
                    <label class="label">Cargo</label>
                    <input required value="{{$usuario->cargo}}" autocomplete="off" name="cargo" class="form-control"
                           type="text" placeholder="Cargo">
                </div>
                                <div class="form-group">
                    <label class="label">Salario</label>
                    <input required value="{{$usuario->salario}}" autocomplete="off" name="salario" class="form-control"
                           type="text" placeholder="salario">
                </div>
                <div class="form-group">
                    <label class="label">Correo electrónico</label>
                    <input required value="{{$usuario->email}}" autocomplete="off" name="email" class="form-control"
                           type="email" placeholder="Correo electrónico">
                </div>
                <div class="form-group">
                    <label class="label">Contraseña</label>
                    <input required value="{{$usuario->password}}" autocomplete="off" name="password"
                           class="form-control"
                           type="password" placeholder="Contraseña">
                </div>

                @include("notificacion")
                <button class="btn btn-success">Guardar</button>
                <a class="btn btn-primary" href="{{route("usuarios.index")}}">Volver</a>
            </form>
        </div>
    </div>
@endsection
