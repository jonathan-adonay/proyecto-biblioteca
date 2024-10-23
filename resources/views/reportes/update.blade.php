{{--Heredemos la estructura del archivo app.blade.php--}}

@extends('layouts.app')

{{--Definimos el titulo--}}
@section('title', 'Reportes')

{{--DEfinimos el contenido--}}
@section('content')
    
<h1>Actualizar</h1>
<h5>Formulario de Reporte</h5>
<hr>
<div class="col-md-6">
      <label for="inputPassword4" class="form-label">Nombre de reporte</label>
      <input type="text" name="nombres" value="{{$recordatorios->comentarios}}" class="form-control" id="inputPassword4">
      @error('comentarios') 
      <span class="invalid-feedback d-block" role="alert">
        <strong>{{$message}}</strong>
      </span> 
      @enderror
      div class="col-md-6">
      <label for="inputPassword4" class="form-label">Tipo de reporte</label>
      <input type="text" name="tipo" value="{{$recordatorios->comentarios}}" class="form-control" id="inputPassword4">
      @error('tiporeporte') 
      <span class="invalid-feedback d-block" role="alert">
        <strong>{{$message}}</strong>
      </span> 
      @enderror
      <div class="col-md-6">
      <label for="inputPassword4" class="form-label">Fecha de reporte</label>
      <input type="date" name="reportes" value="{{$recordatorios->fecha_recordatorio}}" class="form-control" id="inputPassword4">
      @error('fecha_reporte') 
      <span class="invalid-feedback d-block" role="alert">
        <strong>{{$message}}</strong>
      </span> 
      @enderror 
      div class="col-md-6">
      <label for="inputPassword4" class="form-label">Usuario</label>
      <input type="text" name="nombres" value="{{$recordatorios->comentarios}}" class="form-control" id="inputPassword4">
      @error('usuario') 
      <span class="invalid-feedback d-block" role="alert">
        <strong>{{$message}}</strong>
      </span> 
      @enderror
  </div>

  <button type="button" class="btn btn-dark">Actualizar</button>
@endsection