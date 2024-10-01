{{--Heredemos la estructura del archivo app.blade.php--}}

@extends('layout.app')

{{--Definimos el titulo--}}
@section('title', 'Recordatorios')

{{--DEfinimos el contenido--}}
@section('content')
    
<br>
<a class="btn btn-danger btn-sm" href="/recordatorios/create">Agregar nuevo recordatorio</a>

<hr>

<table class="table">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Comentarios</th>
        <th scope="col">Fecha de recordatorio</th>
      </tr>
    </thead>
    <tbody>
      <tr>
       
<a class="btn btn-success btn-sm" >Modificar</a>
<button class="btn btn-danger btn-sm" u onclick="destroy(this)" token="{{ csrf_token() }}">Eliminar</a>
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