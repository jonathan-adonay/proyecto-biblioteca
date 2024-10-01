{{--Heredemos la estructura del archivo app.blade.php--}}

@extends('layout.app')

{{--Definimos el titulo--}}
@section('title', 'Editoriales')

{{--DEfinimos el contenido--}}
@section('content')
    
<br>
<a class="btn btn-danger btn-sm" href="/editoriales/create">Agregar nuevo editorial</a>

<hr>

<table class="table">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Nombre</th>
        <th scope="col">Direccion</th>
        <th scope="col">Telefono</th>
        <th scope="col">Correo</th>
        <th scope="col">Pagina Web</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        
<a class="btn btn-success btn-sm" >Modificar</a>
<button class="btn btn-danger btn-sm"  onclick="destroy(this)" token="{{ csrf_token() }}">Eliminar</a>
</td>
 </tr> 


</tbody>
 </table>

@endsection
@section('scripts') 
 {{-- SweetAlert --}}
 <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
 {{-- JS --}}
 <script src="{{ asset('js/product.js') }}"></script>
@endsection