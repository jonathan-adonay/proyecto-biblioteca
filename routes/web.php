<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibrosController;
use App\Http\Controllers\AutorController; // Asegúrate de tener un controlador para autores
use App\Http\Controllers\PrestamosController;

Route::resource('prestamos', PrestamosController::class);



Route::get('/', function () {
    return view('home');
});

//Ruta para libros
Route::get('/libros/show', function () {
    return view('libros/show', ['Libros'=>'Gabriel García Márquez']);
});

//Ruta para mostrar la vista de show.blade.php
Route::get('/libros/create', function () {
    return view('libros/create');
});

//Ruta para mostrar la vista de show.blade.php
Route::get('/libros/update', function () {
    return view('libros/update');
});

//Autor
Route::resource('autor', AutorController::class);

 Route::get('/autor/show/{autor}', [AutorController::class, 'index'])->name('autor.show');
 Route::get('/autor/create', [AutorController::class, 'create'])->name('autor.create');
 Route::get('/autor/update/{autor}', [AutorController::class, 'update'])->name('autor.update');
 Route::get('/autor/delete/{autor}', [AutorController::class, 'destroy'])->name('autor.delete');
 Route::get('/autor/edit/{autor}', [AutorController::class, 'edit'])->name('autor.edit');
 Route::get('/autor/store/', [AutorController::class, 'store'])->name('autor.store');
 Route::get('/autor/destroy/{id}', [AutorController::class, 'destroy'])->name('autor.destroy');


Route::get('/autor/show', function () {
    return view('autor/show');  
});

Route::get('/autor/create', function () {
    return view('autor/create');
});

Route::get('/autor/update', function () {
    return view('autor/update');
});


//editoriales
Route::resource('editoriales', AutorController::class);


Route::get('/editoriales/show', function () {
    return view('editoriales/show');
});

Route::get('/editoriales/create', function () {
    return view('editoriales/create');
});

Route::get('/editoriales/update', function () {
    return view('editoriales/update');
});


//usuarios

Route::get('/usuarios/show', function () {
    return view('usuarios/show');
});

Route::get('/usuarios/create', function () {
    return view('usuarios/create');
});

Route::get('/usuarios/update', function () {
    return view('usuarios/update');
});

//Prestamos

Route::get('/prestamos/show', function () {
    return view('prestamos/show');
});

Route::get('/prestamos/create', function () {
    return view('prestamos/create');
});

Route::get('/prestamos/update', function () {
    return view('prestamos/update');
});

//Detalle de prestamos

Route::get('/detalle_prestamo/show', function () {
    return view('detalle_prestamo/show');
});

Route::get('/detalle_prestamo/create', function () {
    return view('detalle_prestamo/create');
});

Route::get('/detalle_prestamo/update', function () {
    return view('detalle_prestamo/update');
});

//Devoluciones

Route::get('/devoluciones/show', function () {
    return view('devoluciones/show');
});

Route::get('/devoluciones/create', function () {
    return view('devoluciones/create');
});

Route::get('/devoluciones/update', function () {
    return view('devoluciones/update');
});

//reportes

Route::get('/recordatorios/show', function () {
    return view('recordatorios/show');
});

Route::get('/recordatorios/create', function () {
    return view('recordatorios/create');
});

Route::get('/recordatorios/update', function () {
    return view('recordatorios/update');
});



//reportes

Route::get('/reportes/show', function () {
    return view('reportes/show');
});

Route::get('/reportes/create', function () {
    return view('reportes/create');
});

Route::get('/reportes/update', function () {
    return view('reportes/update');
});

//nombre

Route::get('/home', function () {
    return view('home');
});


Auth::routes();



Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
