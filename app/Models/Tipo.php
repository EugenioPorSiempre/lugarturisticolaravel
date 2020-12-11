<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
    use HasFactory;

     //Definiendo la tabla del modelo
     protected $table = 'tipos';

     //Definiendo los campos de la tabla
     protected $fillable = ['nombre'];
}
