<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class PersonasController extends Controller
{

    public $rules = [
        "nombres" => ['required', 'string','max:60'],
        "apellidos" => ['required', 'string'],
        "identidad" => ['required', 'string'],
        "sexo_id" => ['required', 'numeric'],
        "etnia_id" => ['required', 'numeric'],
        "barrio_id" => ['required', 'numeric'],
        "direccion" => ['required', 'string'],
        "telefono" => ['required', 'string'],
        "celular" => ['required', 'string'],
        "fecha_nacimiento" => ['required', 'date'],
        "cooperativa_id" => ['required', 'numeric'],
    ];

    public function index()
    {
        $personas = Persona::all();
        return view('app.personas.index', compact("personas"));
    }

   
    public function add()
    {     $model=false; 

        return view('app.personas.add',compact("model"));
    }

   
    public function store(Request $request, Persona $model)
    {
        $campos = $this->validate($request, $this->rules);

        $model->create($campos);

        return redirect()->route('persona');
    }

    public function show(Persona $persona)
    {
        //
    }

    public function edit(Persona $model)
    {
        return view('app.personas.edit', compact('model'));
    }

    public function update(Request $request, Persona $model)
    {
        $campos=$this->validate($request,$this->rules);

        $model->update($campos);

        return redirect()->route('persona');
    }

    public function destroy(Persona $persona)
    {
        //
    }
}
