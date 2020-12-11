<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    use HasFactory;

     //Definiendo la tabla del modelo
     protected $table = 'vehiculos';

     //Definiendo los campos de la tabla
     protected $fillable = [
        "placa",
        "chasis",
        "circulacion",
        "motor",
        "numero_pasajeros",
        "color_id",
        "barrio_id",
        "propietario_id",
        "combustible_id",
        "observaciones"
    ];
}
