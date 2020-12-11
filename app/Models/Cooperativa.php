<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cooperativa extends Model
{
    use HasFactory;

     //Definiendo la tabla del modelo
     protected $table = 'cooperativas';

     //Definiendo los campos de la tabla
     protected $fillable = [
         'cooperativa',
         'siglas'
        ];
}
