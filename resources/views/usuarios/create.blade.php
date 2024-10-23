{{-- Heredamos la estructura del archivo app.blade.php --}}
@extends('layouts.app')

{{-- Definimos el título --}}
@section('title', 'Crear Usuario')

{{-- Definimos el contenido --}}
@section('content')
<div class="container mt-4" style="background: linear-gradient(to bottom, #ff7e5f, #feb47b); border: 2px solid #f39c12; border-radius: 15px; padding: 30px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);">
    <h1 class="text-center text-light">Crear Usuario</h1>
    <h5 class="text-center text-light">Formulario de Usuarios</h5>
    <hr class="bg-light">
    <form class="row g-3">
        <div class="col-md-6">
            <label for="nombre" class="form-label text-light">Nombre</label>
            <input type="text" class="form-control" id="nombre" placeholder="Ingrese el nombre del usuario" required style="border: 1px solid #ffffff; border-radius: 5px; background-color: #f5f5f5;">
        </div>
        <div class="col-md-6">
            <label for="email" class="form-label text-light">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Ingrese el email del usuario" required style="border: 1px solid #ffffff; border-radius: 5px; background-color: #f5f5f5;">
        </div>
        <div class="col-md-6">
            <label for="password" class="form-label text-light">Password</label>
            <input type="password" class="form-control" id="password" placeholder="Ingrese el password" required style="border: 1px solid #ffffff; border-radius: 5px; background-color: #f5f5f5;">
        </div>
        <div class="col-12 text-center">
            <button type="submit" class="btn btn-light" style="border-radius: 5px; background-color: #ffffff; color: #3b5998; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);">Registrar</button>
        </div>
    </form>
</div>
@endsection
