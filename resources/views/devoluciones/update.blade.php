{{--Heredemos la estructura del archivo app.blade.php--}}

@extends('layout.app')

{{--Definimos el titulo--}}
@section('title', 'Devolucion')

{{--DEfinimos el contenido--}}
@section('content')
    
<h1>Actualizar</h1>
<h5>Formulario de devolucion</h5>
<hr>
<div class="col-md-6">
      <label for="inputPassword4" class="form-label">Prestamo</label>
      <input type="text" name="devolucion" value="{{$devoluciones->fechadevoluciones}}" class="form-control" id="inputPassword4">
      @error('prestamo') 
      <span class="invalid-feedback d-block" role="alert">
        <strong>{{$message}}</strong>
      </span> 
      @enderror 
  </div>
  <div class="col-md-6">
      <label for="inputPassword4" class="form-label">Fecha de devolucion</label>
      <input type="date" name="fechadevolucion" value="{{$devoluciones->estado}}" class="form-control" id="inputPassword4">
      @error('fechadevolucion') 
      <span class="invalid-feedback d-block" role="alert">
        <strong>{{$message}}</strong>
      </span> 
      @enderror 
  </div>
  <div class="col-md-6">
      <label for="inputPassword4" class="form-label">Estdo de libro</label>
      <input type="text" name="estado" value="{{$devoluciones->estado}}" class="form-control" id="inputPassword4">
      @error('estado') 
      <span class="invalid-feedback d-block" role="alert">
        <strong>{{$message}}</strong>
      </span> 
      @enderror 
  </div>

  <button type="button" class="btn btn-dark">Actualizar</button>
@endsection