@extends('base')

@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Add a tutor</h1>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('tutores.store') }}">
          @csrf
          <div class="form-group">
              <label for="first_name">Empresa:</label>
              <input type="text" class="form-control" name="empresa" value="{{ old('empresa') }}"/>
          </div>
          <div class="form-group">
              <label for="first_name">Documento:</label>
              <input type="text" class="form-control" name="documento" value="{{ old('documento') }}"/>
          </div>
          <div class="form-group">
              <label for="first_name">Dni:</label>
              <input type="text" class="form-control" name="dni" value="{{ old('dni') }}"/>
          </div>
          <div class="form-group">
              <label for="first_name">Nombre:</label>
              <input type="text" class="form-control" name="nombre" value="{{ old('nombre') }}"/>
          </div>
          <div class="form-group">
              <label for="first_name">Primer apellido:</label>
              <input type="text" class="form-control" name="primer_apellido" value="{{ old('primer_apellido') }}"/>
          </div>
          <div class="form-group">
              <label for="first_name">Segundo apellido:</label>
              <input type="text" class="form-control" name="segundo_apellido" value="{{ old('segundo_apellido') }}"/>
          </div>
          <div class="form-group">
              <label for="first_name">Pais:</label>
              <input type="text" class="form-control" name="pais" value="{{ old('pais') }}"/>
          </div>
          <div class="form-group">
              <label for="first_name">Provincia:</label>
              <input type="text" class="form-control" name="provincia" value="{{ old('provincia') }}"/>
          </div>
          <div class="form-group">
              <label for="first_name">Municipio:</label>
              <input type="text" class="form-control" name="municipio" value="{{ old('municipio') }}"/>
          </div>
          <div class="form-group">
              <label for="first_name">Estado:</label>
              <input type="text" class="form-control" name="estado" value="{{ old('estado') }}"/>
          </div>
          <div class="form-group">
              <label for="first_name">Telefono:</label>
              <input type="number" class="form-control" name="telefono" value="{{ old('telefono') }}"/>
          </div>
          <div class="form-group">
              <label for="first_name">Email:</label>
              <input type="email" class="form-control" name="email" value="{{ old('email') }}"/>
          </div>
          <button type="submit" class="btn btn-primary-outline">Add tutor</button>
      </form>
  </div>
</div>
</div>
@endsection
