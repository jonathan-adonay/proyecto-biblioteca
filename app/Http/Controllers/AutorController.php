<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AutorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //listar tods los productos
        $autor = autor::select(
            "nombre",
            "apellido",
            "biografia",
            "fecha_nacimiento",
            "nacionalidad",
            "email",
            "telefono",
            "website",
            "foto",
            "genero"
        )->join("autor","autor", "=", "editoriales")->get();
        //dd($productos);

        //mostrar vistas show.blade.php junto al listado de productos
        return view('/autor/show')->with(['autor'=>$autor]);

        /**
         * show the form for creating a new resouce
         * @return \Illluminate\Http\Response
         */
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
           //listsar marcas para llenar select 
           $cliente = BranchCliente::all();
           //mostrar vista create.blade.php junto al listado de editoriales
           return view('/autor/create')->with(['editoriales'=>$autor]);
   
           /**
            * @param \Illuminate\Http\Request 
            * @return \Illiminate\Http\Response
            * 
            */
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
         //
        //dd($request->post());
        //validar campos
    
        $data = request()->validate([
            'nombre'=> 'required',
            'apellido'=> 'required',
            'biografia'=> 'required',
            'fecha_nacimiento'=> 'required',
            'nacionalidad'=> 'required',
            'email'=> 'required',
            'telefono'=> 'required',
            'website'=> 'required',
            'foto'=> 'required',
            'genero'=> 'required'
        ]);
        //enviar insert
        autor::create($data);

        //redireccionar
        return redirect('/autor/show');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(autor $autor)
    {
         //lsitar marca para llenar select
         $autores = Branchautores::all();
         return view('autor/update')->with(['autor'=>$autor,'autores'=>$autores]);
   
    }

    /**
     * Update the specified resource in storage.
     * @param \Illuminate\Http\Request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, autor $autor)
    {

        // Recuperar el autor por su ID
     

    // Si no se encuentra el autor, devolver un error o redirigir
    if (!$autor) {
        return redirect('autor/show')->withErrors('autor no encontrado');
    }
        //validar campos
        $data = request()->validate([
             'nombre'=> 'required',
            'apellido'=> 'required',
            'biografia'=> 'required',
            'fecha_nacimiento'=> 'required',
            'nacionalidad'=> 'required',
            'email'=> 'required',
            'telefono'=> 'required',
            'website'=> 'required',
            'foto'=> 'required',
            'genero'=> 'required'
        ]);


        //reemplazamos datos anteriores
        $autor->nombre =$data['nombre'];
        $autor->apellido =$data['apellido'];
        $autor->biografia =$data['biografia'];
        $autor->fecha_nacimiento =$data['fecha_nacimiento'];
        $autor->nacionalidad =$data['nacionalidad'];
        $autor->email =$data['email'];
        $autor->telefono =$data['telefono'];
        $autor->website =$data['website'];
        $autor->foto =$data['foto'];
        $autor->Genero =$data['genero'];
        $autor->updated_at = now();
        //enviar a guardar la actualizacion
        $autor->save();
        //redireccionar
        return redirect('/autor/show');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(string $id)
    {
         //Eliminar el product con el id recibido
         autor::destroy($id);
         //Retornar una respuesta json
         return response()->json(array('res'=>true));
  
    }
}
