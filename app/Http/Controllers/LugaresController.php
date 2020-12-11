<?php

namespace App\Http\Controllers;

use App\Models\Lugar;
use Illuminate\Http\Request;

class LugaresController extends Controller
{
    
    public $rules = [
        "nombre" => ['required', 'string','max:60'],
        "tipo_id" => ['required', 'numeric'],
        "direccion" => ['required', 'string'],
    ];

    public function index()
    {
        $lugares = Lugar::all();
        return view('app.lugares.index', compact("lugares"));
    }

    public function edit(Lugar $model)
    {
        return view('app.lugares.edit', compact('model'));
    }
   
    public function add()
    {     $model=false; 

        return view('app.lugares.add',compact("model"));
    }

   
    public function store(Request $request, Lugar $model)
    {
        $campos = $this->validate($request, $this->rules);
        $model->create($campos);
        return redirect()->route('lugar');
    }


    public function update(Request $request, Lugar $model)
    {
        $campos=$this->validate($request,$this->rules);
        $model->update($campos);
        return redirect()->route('lugar');
    }

    public function destroy(Lugar $model)
    {
        $model->delete();
        return redirect()->route('lugar');
    }
}
