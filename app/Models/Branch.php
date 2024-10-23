<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use HasFactory;
    
    protected $table='autores'; //nombre de la table
    protected $primaryKey = 'id'; //llave primaria de la tabla
    protected $fillable = ['nombre','apellido','biografia','fecha_nacimiento','nacionalidad','email','telefono','website','foto','genero'];
}
