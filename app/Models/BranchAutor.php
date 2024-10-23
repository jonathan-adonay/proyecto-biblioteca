<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class autor extends Model
{
    use HasFactory;

    protected $table = 'autores';
    protected $primaryKey = 'id';
    protected $fillable = ['nombre','apellido','biografia','fecha_nacimiento','nacionalidad','email','telefono','website','foto','genero'];
}
