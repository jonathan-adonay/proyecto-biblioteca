{{-- Heredamos la estructura del archivo app.blade.php --}}
@extends('layouts.app')

{{-- Definimos el título --}}
@section('title', 'Crear Recordatorio')

{{-- Definimos el contenido --}}
@section('content')
<div class="container mt-4" style="background: linear-gradient(to bottom, #ff7e5f, #feb47b); border: 2px solid #f39c12; border-radius: 15px; padding: 30px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);">
    <h1 class="text-center text-light">Crear Recordatorio</h1>
    <h5 class="text-center text-light">Formulario de Recordatorio</h5>
    <hr class="bg-light">
    <form class="row g-3">
        <div class="col-md-12">
            <label for="mensaje" class="form-label text-light">Mensaje</label>
            <textarea class="form-control" id="mensaje" placeholder="Escriba el mensaje del recordatorio" required style="border: 1px solid #ffffff; border-radius: 5px; background-color: #f5f5f5;" rows="3"></textarea>
        </div>
        <div class="col-md-6">
            <label for="fecha_recordatorio" class="form-label text-light">Fecha y Hora del Recordatorio</label>
            <input type="datetime-local" class="form-control" id="fecha_recordatorio" required style="border: 1px solid #ffffff; border-radius: 5px; background-color: #f5f5f5;">
        </div>
        <div class="col-12 text-center">
            <button type="submit" class="btn btn-light" style="border-radius: 5px; background-color: #ffffff; color: #3b5998; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);">Registrar Recordatorio</button>
        </div>
    </form>
</div>
@endsection
