{{--Heredemos la estructura del archivo app.blade.php--}}

@extends('layouts.app')

{{--Definimos el titulo--}}
@section('title', 'Detalle_prestamo')

{{--DEfinimos el contenido--}}
@section('content')
    
<h1>Actualizar</h1>
<h5>Formulario para detalle prestamo</h5>
<hr>
<div class="col-md-6">
      <label for="inputPassword4" class="form-label">Prestamo</label>
      <input type="text" name="prestamo" value="{{$detalle_prestamo->nombre}}" class="form-control" id="inputPassword4">
      @error('prestamo') 
      <span class="invalid-feedback d-block" role="alert">
        <strong>{{$message}}</strong>
      </span> 
      @enderror 
  </div>
<div class="col-md-6">
      <label for="inputPassword4" class="form-label">Nombre del libro</label>
      <input type="text" name="nombre" value="{{$detalle_prestamo->nombre}}" class="form-control" id="inputPassword4">
      @error('nombre') 
      <span class="invalid-feedback d-block" role="alert">
        <strong>{{$message}}</strong>
      </span> 
      @enderror 
  </div>
  <div class="col-md-6">
      <label for="inputPassword4" class="form-label">Cantidad de prestamo</label>
      <input type="number" name="cantidadprestamo" value="{{$detalle_prestamo->cantidadprestamo}}" class="form-control" id="inputPassword4">
      @error('nombre') 
      <span class="invalid-feedback d-block" role="alert">
        <strong>{{$message}}</strong>
      </span> 
      @enderror 
  </div>
  <div class="col-md-6">
      <label for="inputPassword4" class="form-label">Estado de libro</label>
      <input type="text" name="estadolibro" value="{{$detalle_prestamo->estadolibro}}" class="form-control" id="inputPassword4">
      @error('nombre') 
      <span class="invalid-feedback d-block" role="alert">
        <strong>{{$message}}</strong>
      </span> 
      @enderror 
  </div>

  <button type="button" class="btn btn-dark">Actualizar</button>
@endsection