{{--Heredemos la estructura del archivo app.blade.php--}}

@extends('layouts.app')

{{--Definimos el titulo--}}
@section('title', 'Autor')

{{--DEfinimos el contenido--}}
@section('content')
    
<br>
<a class="btn btn-danger btn-sm" href="/autor/create">Agregar nuevo detalle de prestamos</a>

<hr>

<table class="table">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">nombre</th>
        <th scope="col">apellidos</th>
      </tr>
    </thead>
    <tbody>
      <tr>
      @foreach ($autor as $item) 
        <tr>
        <td>{{ $item->nombre }}</td>
        <td>{{ $item->apellidos }}</td>
        <td>
       
<a class="btn btn-success btn-sm" href="/autor/edit/{{$item->codigo}}" >Modificar</a>
<button class="btn btn-danger btn-sm"  onclick="destroy(this)" token="{{ csrf_token() }}">Eliminar</a>
</td>
 </tr> 

 @endforeach
</tbody>
 </table>

@endsection
@section('scripts') 
 {{-- SweetAlert --}}
 <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
 {{-- JS --}}
 <script src="{{ asset('js/autor.js') }}"></script>
@endsection