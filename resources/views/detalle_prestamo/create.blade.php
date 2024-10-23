{{-- Heredamos la estructura del archivo app.blade.php --}}
@extends('layouts.app')

{{-- Definimos el título --}}
@section('title', 'Crear Detalle de Préstamo')

{{-- Definimos el contenido --}}
@section('content')
<div class="container mt-4" style="background: linear-gradient(to bottom, #ff7e5f, #feb47b); border: 2px solid #f39c12; border-radius: 15px; padding: 30px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);">
    <h1 class="text-center text-light">Crear Detalle de Préstamo</h1>
    <h5 class="text-center text-light">Formulario de Detalles</h5>
    <hr class="bg-light">
    <form class="row g-3">
        <div class="col-md-6">
            <label for="prestamo_id" class="form-label text-light">Préstamo</label>
            <select class="form-select" id="prestamo_id" required style="border: 1px solid #ffffff; border-radius: 5px; background-color: #f5f5f5;">
                <option selected disabled>Seleccione un préstamo</option>
                {{-- Aquí irán las opciones de préstamos, que se deben pasar desde el controlador --}}
                <option value="1">Préstamo 1</option>
                <option value="2">Préstamo 2</option>
                <!-- Más opciones -->
            </select>
        </div>
        <div class="col-md-6">
            <label for="libro_id" class="form-label text-light">Libro</label>
            <select class="form-select" id="libro_id" required style="border: 1px solid #ffffff; border-radius: 5px; background-color: #f5f5f5;">
                <option selected disabled>Seleccione un libro</option>
                {{-- Aquí irán las opciones de libros, que se deben pasar desde el controlador --}}
                <option value="1">Libro 1</option>
                <option value="2">Libro 2</option>
                <!-- Más opciones -->
            </select>
        </div>
        <div class="col-md-6">
            <label for="cantidad" class="form-label text-light">Cantidad</label>
            <input type="number" class="form-control" id="cantidad" placeholder="Ingrese la cantidad" min="1" required style="border: 1px solid #ffffff; border-radius: 5px; background-color: #f5f5f5;">
        </div>
        <div class="col-md-6">
            <label for="nombre" class="form-label text-light">nombre de el libro</label>
            <input type="string" class="form-control" id="nombre" placeholder="Ingrese el nombre" min="1" required style="border: 1px solid #ffffff; border-radius: 5px; background-color: #f5f5f5;">
        </div>
        <div class="col-md-6">
            <label for="estado_libro" class="form-label text-light">Estado del Libro</label>
            <select class="form-select" id="estado_libro" required style="border: 1px solid #ffffff; border-radius: 5px; background-color: #f5f5f5;">
                <option selected disabled>Seleccione el estado</option>
                <option value="En buen estado">En buen estado</option>
                <option value="Dañado">Dañado</option>
                <option value="Perdido">Perdido</option>
            </select>
        </div>
        <div class="col-12 text-center">
            <button type="submit" class="btn btn-light" style="border-radius: 5px; background-color: #ffffff; color: #3b5998; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);">Registrar Detalle</button>
        </div>
    </form>
</div>
@endsection
