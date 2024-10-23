{{--Heredemos la estructura del archivo app.blade.php--}}

@extends('layouts.app')

{{--Definimos el titulo--}}
@section('title', 'Libros')

{{--DEfinimos el contenido--}}
@section('content')
    
<h1>Actualizar</h1>
<h5>Formulario de libros</h5>
<hr>
<div class="col-md-6">
      <label for="inputPassword4" class="form-label">Autor</label>
      <input type="text" name="autor" value="{{$libros->autor}}" class="form-control" id="inputPassword4">
      @error('nombre') 
      <span class="invalid-feedback d-block" role="alert">
        <strong>{{$message}}</strong>
      </span> 
      @enderror 
  </div>
  <div class="col-md-6">
      <label for="inputPassword4" class="form-label">Año de Publicacion</label>
      <input type="date" name="aniopublicacion" value="{{$libros->autor}}" class="form-control" id="inputPassword4">
      @error('autor') 
      <span class="invalid-feedback d-block" role="alert">
        <strong>{{$message}}</strong>
      </span> 
      @enderror 
  </div>
  <div class="col-md-6">
      <label for="inputPassword4" class="form-label">Titulo</label>
      <input type="text" name="titulo" value="{{$libros->año_publicacion}}" class="form-control" id="inputPassword4">
      @error('titulo') 
      <span class="invalid-feedback d-block" role="alert">
        <strong>{{$message}}</strong>
      </span> 
      @enderror 
  </div>
  <div class="col-md-6">
      <label for="inputPassword4" class="form-label">Genero</label>
      <input type="text" name="genero" value="{{$libros->autor}}" class="form-control" id="inputPassword4">
      @error('genero') 
      <span class="invalid-feedback d-block" role="alert">
        <strong>{{$message}}</strong>
      </span> 
      @enderror 
  </div>

  <button type="button" class="btn btn-dark">Actualizar</button>
@endsection