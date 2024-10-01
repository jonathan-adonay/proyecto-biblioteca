<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use HasFactory;
    
    protected $table='editoriales'; //nombre de la table
    protected $primaryKey = 'id'; //llave primaria de la tabla
    protected $fillable = ['nombre','direccion']; //campos para asignacion masiva

}
