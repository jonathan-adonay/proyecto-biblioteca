{{--Heredemos la estructura del archivo app.blade.php--}}

@extends('layouts.app')
{{--Definimos el titulo--}}
@section('title', 'Autor')

{{--DEfinimos el contenido--}}
@section('content')
    
<h1>Actualizar</h1>
<h5>Formulario para actores</h5>
<hr>
<form class="row g-3"  method="POST">
  <!-- @csrf
  @method('PUT')   -->
  <div class="col-md-6">
      <label for="inputPassword4" class="form-label">Nombre</label>
      <input type="text" name="nombre"  class="form-control" id="inputPassword4">
      @error('nombre') 
      <span class="invalid-feedback d-block" role="alert">
        <strong>{{$message}}</strong>
      </span> 
      @enderror 
  </div>
  <div class="col-md-6">
      <label for="inputPassword4" class="form-label">apellidos</label>
      <input type="text" name="apellidos"  class="form-control" id="inputPassword4">
      @error('apellidos') 
      <span class="invalid-feedback d-block" role="alert">
        <strong>{{$message}}</strong>
      </span> 
      @enderror 
  </div>

  <button type="submit" class="btn btn-dark">Actualizar</button>
</form>
@endsection