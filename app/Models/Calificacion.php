<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calificacion extends Model
{
    use HasFactory;

    //Definiendo la tabla del modelo
    protected $table = 'calificaciones';

    //Definiendo los campos de la tabla
    protected $fillable = ['calificacion'];
}
