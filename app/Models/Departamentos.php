<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamentos extends Model
{
    use HasFactory;

     //Definiendo la tabla del modelo
     protected $table = 'departamentos';

     //Definiendo los campos de la tabla
     protected $fillable = [
         'departamento',
         'pais_id',
        ];
}
