<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ruta extends Model
{
    use HasFactory;

     //Definiendo la tabla del modelo
     protected $table = 'rutas';

     //Definiendo los campos de la tabla
     protected $fillable = [
        "vehiculo_id",
        "origen_id",
        "hora_sale_origen",
        "destino_id",
        "hora_sale_destino",
        "hora_retorno"
        ];
}
