@extends("maestra")
@section("titulo", "Agregar usuario")
@section("contenido")
<div class="row">
  <div class="col-12">
    <h1>Agregar usuario</h1>
    <form method="POST" action="{{route("usuarios.store")}}">
      @csrf
      <div class="form-group row">
        <label for="name" class="col-md-4 col-form-label text-md-right">Nombre</label>

        <div class="col-md-6">
          <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
          name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

          @error('name')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
      </div>
      <div class="form-group row">
        <label for="direccion" class="col-md-4 col-form-label text-md-right">Direccion</label>

        <div class="col-md-6">
          <input id="direccion" type="text" class="form-control @error('direccion') is-invalid @enderror"
          name="direccion" value="{{ old('direccion') }}" required autocomplete="direccion" autofocus>

          @error('direccion')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
      </div>
      <div class="form-group row">
        <label for="ciudad" class="col-md-4 col-form-label text-md-right">Ciudad</label>

        <div class="col-md-6">
          <input id="ciudad" type="text" class="form-control @error('ciudad') is-invalid @enderror"
          name="ciudad" value="{{ old('ciudad') }}" required autocomplete="ciudad" autofocus>

          @error('ciudad')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
      </div>
      <div class="form-group row">
        <label for="telefono" class="col-md-4 col-form-label text-md-right">Telefono</label>

        <div class="col-md-6">
          <input id="telefono" type="text" class="form-control @error('telefono') is-invalid @enderror"
          name="telefono" value="{{ old('telefono') }}" required autocomplete="telefono" autofocus>

          @error('telefono')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
      </div>
      <div class="form-group row">
        <label for="cargo" class="col-md-4 col-form-label text-md-right">Cargo</label>

        <div class="col-md-6">
          <input id="cargo" type="text" class="form-control @error('cargo') is-invalid @enderror"
          name="cargo" value="{{ old('cargo') }}" required autocomplete="cargo" autofocus>

          @error('cargo')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
      </div>
      <div class="form-group row">
        <label for="salario" class="col-md-4 col-form-label text-md-right">Salario</label>

        <div class="col-md-6">
          <input id="salario" type="text" class="form-control @error('salario') is-invalid @enderror"
          name="salario" value="{{ old('salario') }}" required autocomplete="salario" autofocus>

          @error('salario')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
      </div>

      <div class="form-group row">
        <label for="email"
        class="col-md-4 col-form-label text-md-right">Correo electrónico</label>

        <div class="col-md-6">
          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
          name="email" value="{{ old('email') }}" required autocomplete="email">

          @error('email')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
      </div>

      <div class="form-group row">
        <label for="password"
        class="col-md-4 col-form-label text-md-right">Contraseña</label>

        <div class="col-md-6">
          <input id="password" type="password"
          class="form-control @error('password') is-invalid @enderror" name="password"
          required autocomplete="new-password">

          @error('password')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
      </div>

      <div class="form-group row">
        <label for="password-confirm"
        class="col-md-4 col-form-label text-md-right">Confirmar contraseña</label>

        <div class="col-md-6">
          <input id="password-confirm" type="password" class="form-control"
          name="password_confirmation" required autocomplete="new-password">
        </div>
      </div>

      @include("notificacion")
      <button class="btn btn-success">Guardar</button>
      <a class="btn btn-primary" href="{{route("usuarios.index")}}">Volver al listado</a>
    </form>
  </div>
</div>
@endsection
