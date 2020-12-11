<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lugar extends Model
{
    use HasFactory;

     //Definiendo la tabla del modelo
     protected $table = 'lugares';

    //Definiendo los campos de la tabla
    protected $fillable = [
        "nombre",
        "tipo_id",
        "direccion",
    ];

    public function tipo()
    {
        return $this->hasOne(
            Tipo::class,
            'id',
            'tipo_id'
        );
    }

}
