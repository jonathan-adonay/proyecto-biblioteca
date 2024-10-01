{{-- Heredamos la estructura del archivo app.blade.php --}}
@extends('layout.app')

{{-- Definimos el título --}}
@section('title', 'Crear Autor')

{{-- Definimos el contenido --}}
@section('content')
<div class="container mt-4" style="background: linear-gradient(to bottom, #ff7e5f, #feb47b); border: 2px solid #f39c12; border-radius: 15px; padding: 30px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);">
    <h1 class="text-center text-light">Crear Autor</h1>
    <h5 class="text-center text-light">Formulario de Autores</h5>
    <hr class="bg-light">
    <form class="row g-3" method="POST" >
        @csrf  {{-- Agregar token CSRF para la seguridad --}}
        
        <div class="col-md-6">
            <label for="nombre" class="form-label text-light">Nombres</label>
            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingrese el nombre del autor" required style="border: 1px solid #ffffff; border-radius: 5px;">
        </div>
        
        <div class="col-md-6">
            <label for="apellido" class="form-label text-light">Apellidos</label>
            <input type="text" class="form-control" name="apellido" id="apellido" placeholder="Ingrese los apellidos del autor" required style="border: 1px solid #ffffff; border-radius: 5px;">
        </div>

        <div class="col-md-6">
            <label for="biografia" class="form-label text-light">Biografía</label>
            <textarea class="form-control" name="biografia" id="biografia" placeholder="Ingrese una breve biografía del autor" rows="3" style="border: 1px solid #ffffff; border-radius: 5px;"></textarea>
        </div>

        <div class="col-md-6">
            <label for="fecha_nacimiento" class="form-label text-light">Fecha de Nacimiento</label>
            <input type="date" class="form-control" name="fecha_nacimiento" id="fecha_nacimiento" style="border: 1px solid #ffffff; border-radius: 5px;">
        </div>

        <div class="col-md-6">
            <label for="nacionalidad" class="form-label text-light">Nacionalidad</label>
            <input type="text" class="form-control" name="nacionalidad" id="nacionalidad" placeholder="Ingrese la nacionalidad del autor" required style="border: 1px solid #ffffff; border-radius: 5px;">
        </div>

        <div class="col-md-6">
            <label for="email" class="form-label text-light">Email</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="Ingrese el email del autor" required style="border: 1px solid #ffffff; border-radius: 5px;">
        </div>

        <div class="col-md-6">
            <label for="telefono" class="form-label text-light">Teléfono</label>
            <input type="tel" class="form-control" name="telefono" id="telefono" placeholder="Ingrese el teléfono del autor" style="border: 1px solid #ffffff; border-radius: 5px;">
        </div>

        <div class="col-md-6">
            <label for="website" class="form-label text-light">Sitio Web</label>
            <input type="url" class="form-control" name="website" id="website" placeholder="Ingrese el sitio web del autor" style="border: 1px solid #ffffff; border-radius: 5px;">
        </div>

        <div class="col-md-6">
            <label for="foto" class="form-label text-light">Foto URL</label>
            <input type="text" class="form-control" name="foto" id="foto" placeholder="Ingrese la URL de la foto del autor" style="border: 1px solid #ffffff; border-radius: 5px;">
        </div>

        <div class="col-md-6">
            <label for="genero" class="form-label text-light">Género</label>
            <select class="form-select" name="genero" id="genero" style="border: 1px solid #ffffff; border-radius: 5px;">
                <option value="" disabled selected>Seleccione un género</option>
                <option value="masculino">Masculino</option>
                <option value="femenino">Femenino</option>
                <option value="otro">Otro</option>
            </select>
        </div>

        <div class="col-12 text-center">
            <button type="submit" class="btn btn-light" style="border-radius: 5px; background-color: #ffffff; color: #3b5998;">Ingresar</button>
        </div>
    </form>
</div>
@endsection
