<?php

namespace App\Http\Controllers;

use App\Models\Tipo;
use Illuminate\Http\Request;

class TipoLugarController extends Controller
{
    
    public $rules = [
        'nombre' => ['required','string']
    ];

    public function index(Request $request)
    {

        $rows = Tipo::query()
            ->orderBy('id', 'desc')
            ->get();

        return view('catalogos.tipos.index', compact('rows'));
    }

    public function edit(Tipo $model){

        return view('catalogos.tipos.edit',compact('model'));
    }

    public function add(){
        return view('catalogos.tipos.add');
    }

    public function store(Request $request){
        $campos=$this->validate($request,$this->rules);
        $model=Tipo::query()->create($campos);
        $model->save();
        return redirect()->route('tipo');
    }

    public function update(Tipo $model,Request $request){
        $campos=$this->validate($request,$this->rules);
        $model->fill($campos);
        $model->save();
        return redirect()->route('tipo');
    }

    public function destroy(Tipo $model){
        $model->delete();
        return redirect()->route('tipo');
    }
}
