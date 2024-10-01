{{--Heredemos la estructura del archivo app.blade.php--}}

@extends('layout.app')

{{--Definimos el titulo--}}
@section('title', 'Prestamos')

{{--DEfinimos el contenido--}}
@section('content')
    
<h1>Actualizar</h1>
<h5>Formulario de prestamo</h5>
<hr>
<div class="col-md-6">
      <label for="inputPassword4" class="form-label">Fecha de prestamo</label>
      <input type="date" name="fechaprestamo" value="{{$prestamos->usuarios}}" class="form-control" id="inputPassword4">
      @error('usuarios') 
      <span class="invalid-feedback d-block" role="alert">
        <strong>{{$message}}</strong>
      </span> 
      @enderror 
      <div class="col-md-6">
      <label for="inputPassword4" class="form-label">Fecha de devoluvion</label>
      <input type="date" name="fechadevolucion" value="{{$libros->libros}}" class="form-control" id="inputPassword4">
      @error('libros') 
      <span class="invalid-feedback d-block" role="alert">
        <strong>{{$message}}</strong>
      </span> 
      @enderror 
  </div>
  <div class="col-md-6">
      <label for="inputPassword4" class="form-label">Fecha de devolucion real</label>
      <input type="date" name="fecha_prestamoreal" value="{{$prestamos->fecha_prestamo}}" class="form-control" id="inputPassword4">
      @error('fecha_prestamo') 
      <span class="invalid-feedback d-block" role="alert">
        <strong>{{$message}}</strong>
      </span> 
      @enderror 
  </div>
  <div class="col-md-6">
      <label for="inputPassword4" class="form-label">Estado</label>
      <input type="text" name="estado" value="{{$prestamos->fecha_prestamo}}" class="form-control" id="inputPassword4">
      @error('fecha_prestamo') 
      <span class="invalid-feedback d-block" role="alert">
        <strong>{{$message}}</strong>
      </span> 
      @enderror 
  </div>

  <button type="button" class="btn btn-dark">Actualizar</button>
@endsection