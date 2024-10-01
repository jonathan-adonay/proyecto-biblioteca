{{-- Heredamos la estructura del archivo app.blade.php --}}
@extends('layout.app')

{{-- Definimos el título --}}
@section('title', 'Agregar Editorial')

{{-- Definimos el contenido --}}
@section('content')
<div class="container mt-4" style="background: linear-gradient(to bottom, #ff7e5f, #feb47b); border: 2px solid #f39c12; border-radius: 15px; padding: 30px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);">
    <h5 class="text-center text-light">Formulario de Editoriales</h5>
    <hr class="bg-light">
    <form class="row g-3" method="POST" >
        @csrf
        <div class="col-md-6">
            <label for="nombre" class="form-label text-light">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese el nombre de la editorial" required style="border: 1px solid #ffffff; border-radius: 5px; background-color: #f5f5f5;">
        </div>
        <div class="col-md-6">
            <label for="direccion" class="form-label text-light">Dirección</label>
            <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Ingrese la dirección de la editorial" style="border: 1px solid #ffffff; border-radius: 5px; background-color: #f5f5f5;">
        </div>
        <div class="col-md-6">
            <label for="telefono" class="form-label text-light">Teléfono</label>
            <input type="number" class="form-control" id="telefono" name="telefono" placeholder="Ingrese el número de teléfono" style="border: 1px solid #ffffff; border-radius: 5px; background-color: #f5f5f5;">
        </div>
        <div class="col-md-6">
            <label for="email" class="form-label text-light">Correo Electrónico</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Ingrese el correo electrónico" style="border: 1px solid #ffffff; border-radius: 5px; background-color: #f5f5f5;">
        </div>
        <div class="col-md-6">
            <label for="pagina_web" class="form-label text-light">Página Web</label>
            <input type="url" class="form-control" id="pagina_web" name="pagina_web" placeholder="Ingrese la página web" style="border: 1px solid #ffffff; border-radius: 5px; background-color: #f5f5f5;">
        </div>
        <div class="col-md-6">
            <label for="descripcion" class="form-label text-light">Descripción</label>
            <textarea class="form-control" id="descripcion" name="descripcion" rows="3" placeholder="Ingrese una breve descripción" style="border: 1px solid #ffffff; border-radius: 5px; background-color: #f5f5f5;"></textarea>
        </div>
        <div class="col-12 text-center">
            <button type="submit" class="btn btn-light" style="border-radius: 5px; background-color: #ffffff; color: #3b5998; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);">Registrar Editorial</button>
        </div>
    </form>
</div>
@endsection
