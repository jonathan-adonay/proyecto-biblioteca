{{-- Heredamos la estructura del archivo app.blade.php --}}
@extends('layout.app')

{{-- Definimos el título --}}
@section('title', 'Libros')

{{-- Definimos el contenido --}}
@section('content')
<div class="container mt-4" style="background: linear-gradient(to right, #3b5998, #8b9dc3); border-radius: 10px; padding: 20px;">
    <h5 class="text-center text-light">Tabla de Libros</h5>
    <br>
    <a class="btn btn-danger btn-sm" href="/libros/create">Agregar nuevo libro</a>
    <hr>
    
    <table class="table table-striped text-light">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Autor</th>
                <th scope="col">Año de Publicación</th>
                <th scope="col">Género</th>
                <th scope="col">Título</th>
                
            </tr>
        </thead>
        <tbody>
            
                    <a class="btn btn-success btn-sm" >Modificar</a>
                    <button class="btn btn-danger btn-sm"  onclick="destroy(this)" token="{{ csrf_token() }}">Eliminar</button>
                </td>
            </tr>

        </tbody>
    </table>
</div>
@endsection

@section('scripts') 
{{-- SweetAlert --}}
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
{{-- JS --}}
<script src="{{ asset('js/product.js') }}"></script>
@endsection
