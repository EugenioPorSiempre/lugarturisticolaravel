<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleLugar extends Model
{
    use HasFactory;


     //Definiendo la tabla del modelo
     protected $table = 'detalle_lugares';

    //Definiendo los campos de la tabla
    protected $fillable = [
        "calificacion_id",
        "comentario_id",
        "lugar_id",
        "user_id",
    ];
}
