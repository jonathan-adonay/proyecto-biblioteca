{{--Heredemos la estructura del archivo app.blade.php--}}

@extends('layouts.app')

{{--Definimos el titulo--}}
@section('title', 'Recordatorios')

{{--DEfinimos el contenido--}}
@section('content')
    
<h1>Actualizar</h1>
<h5>Formulario de Recordatorio</h5>
<hr>
<div class="col-md-6">
      <label for="inputPassword4" class="form-label">Comentarios</label>
      <input type="text" name="comentarios" value="{{$recordatorios->comentarios}}" class="form-control" id="inputPassword4">
      @error('comentarios') 
      <span class="invalid-feedback d-block" role="alert">
        <strong>{{$message}}</strong>
      </span> 
      @enderror 
      <div class="col-md-6">
      <label for="inputPassword4" class="form-label">Fecha de recordatorio</label>
      <input type="date" name="fecha_recordatorio" value="{{$recordatorios->fecha_recordatorio}}" class="form-control" id="inputPassword4">
      @error('fecha_recordatorio') 
      <span class="invalid-feedback d-block" role="alert">
        <strong>{{$message}}</strong>
      </span> 
      @enderror 
  </div>

  <button type="button" class="btn btn-dark">Actualizar</button>
@endsection