{{-- Heredamos la estructura del archivo app.blade.php --}}
@extends('layout.app')

{{-- Definimos el título --}}
@section('title', 'Crear Libro')

{{-- Definimos el contenido --}}
@section('content')
<div class="container mt-4" style="background: linear-gradient(to bottom, #ff7e5f, #feb47b); border: 2px solid #f39c12; border-radius: 15px; padding: 30px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);">
    <h1 class="text-center text-light">Crear Libro</h1>
    <h5 class="text-center text-light">Formulario de Libros</h5>
    <hr class="bg-light">
    <form class="row g-3">
        <div class="col-md-6">
            <label for="autor" class="form-label text-light">Autor</label>
            <input type="text" class="form-control" id="autor" placeholder="Ingrese el nombre del autor" required style="border: 1px solid #ffffff; border-radius: 5px; background-color: #f5f5f5;">
        </div>
        <div class="col-md-6">
            <label for="titulo" class="form-label text-light">Título</label>
            <input type="text" class="form-control" id="titulo" placeholder="Ingrese el título del libro" required style="border: 1px solid #ffffff; border-radius: 5px; background-color: #f5f5f5;">
        </div>
        <div class="col-md-6">
            <label for="genero" class="form-label text-light">Género</label>
            <input type="text" class="form-control" id="genero" placeholder="Ingrese el género del libro" required style="border: 1px solid #ffffff; border-radius: 5px; background-color: #f5f5f5;">
        </div>
        <div class="col-md-6">
            <label for="anio_publicacion" class="form-label text-light">Año de Publicación</label>
            <input type="date" class="form-control" id="anio_publicacion" placeholder="Año" min="1900" max="{{ date('Y') }}" required style="border: 1px solid #ffffff; border-radius: 5px; background-color: #f5f5f5;">
        </div>
        <div class="col-12 text-center">
            <button type="submit" class="btn btn-light" style="border-radius: 5px; background-color: #ffffff; color: #3b5998; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);">Ingresar</button>
        </div>
    </form>
</div>
@endsection
