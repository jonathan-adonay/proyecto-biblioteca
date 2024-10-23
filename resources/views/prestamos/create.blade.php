{{-- Heredamos la estructura del archivo app.blade.php --}}
@extends('layouts.app')

{{-- Definimos el título --}}
@section('title', 'Crear Préstamo')

{{-- Definimos el contenido --}}
@section('content')
<div class="container mt-4" style="background: linear-gradient(to bottom, #ff7e5f, #feb47b); border: 2px solid #f39c12; border-radius: 15px; padding: 30px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);">
    <h1 class="text-center text-light">Crear Préstamo</h1>
    <h5 class="text-center text-light">Formulario de Préstamo</h5>
    <hr class="bg-light">
    <form class="row g-3">
        <div class="col-md-6">
            <label for="fecha_prestamo" class="form-label text-light">Fecha del Préstamo</label>
            <input type="date" class="form-control" id="fecha_prestamo" required style="border: 1px solid #ffffff; border-radius: 5px; background-color: #f5f5f5;">
        </div>
        <div class="col-md-6">
            <label for="fecha_devolucion" class="form-label text-light">Fecha de Devolución</label>
            <input type="date" class="form-control" id="fecha_devolucion" required style="border: 1px solid #ffffff; border-radius: 5px; background-color: #f5f5f5;">
        </div>
        <div class="col-md-6">
            <label for="fecha_devolucion_real" class="form-label text-light">Fecha de Devolución Real</label>
            <input type="date" class="form-control" id="fecha_devolucion_real" style="border: 1px solid #ffffff; border-radius: 5px; background-color: #f5f5f5;">
        </div>
        <div class="col-md-6">
            <label for="estado" class="form-label text-light">Estado</label>
            <select class="form-select" id="estado" required style="border: 1px solid #ffffff; border-radius: 5px; background-color: #f5f5f5;">
                <option selected disabled>Seleccione el estado</option>
                <option value="Pendiente">Pendiente</option>
                <option value="Devuelto">Devuelto</option>
                <option value="Atrasado">Atrasado</option>
            </select>
        </div>
        <div class="col-12 text-center">
            <button type="submit" class="btn btn-light" style="border-radius: 5px; background-color: #ffffff; color: #3b5998; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);">Registrar Préstamo</button>
        </div>
    </form>
</div>
@endsection
