<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setup extends Model
{
    use HasFactory;

    //Definiendo la tabla del modelo
    protected $table = 'setup';

    //Definiendo los campos de la tabla
    protected $fillable = [
        "secretario_concejo_id",
        "responsable_transporte_id",
        "responsable_tributacion_id",
       ];
}
