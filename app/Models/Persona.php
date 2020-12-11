<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;

    //Definiendo la tabla del modelo
    protected $table = 'personas';

    //Definiendo los campos de la tabla
    protected $fillable = [
        "nombres",
        "apellidos",
        "identidad",
        "sexo_id",
        "etnia_id",
        "barrio_id",
        "direccion",
        "telefono",
        "celular",
        "fecha_nacimiento",
        "cooperativa_id",
    ];

                    //FullName => full_name
    public function getFullNameAttribute()
    {
        return $this->nombres . '  ' . $this->apellidos;
    }

    public function getEdadAttribute()
    {
        return Carbon::parse($this->fecha_nacimiento)->age;
    }

    public function barrio()
    {
        return $this->hasOne(
            Barrio::class,
            'id',
            'barrio_id'
        );
    }

    public function sexo()
    {
        return $this->hasOne(
            Sexo::class,
            'id',
            'sexo_id'
        );
    }

    public function etnia()
    {
        return $this->hasOne(
            Etnia::class,
            'id',
            'etnia_id'
        );
    }

    public function cooperativa()
    {
        return $this->hasOne(
            Cooperativa::class,
            'id',
            'cooperativa_id'
        );
    }
}
