<?php

namespace App\Http\Controllers;

use App\Models\Calificacion;
use Illuminate\Http\Request;

class CalificacionController extends Controller
{
    public $rules = [
        'calificacion' => ['string']
    ];

    public function index(Request $request)
    {

        $rows = Calificacion::query()
            ->orderBy('id', 'desc')
            ->get();

        return view('valoracion.calificaciones.index', compact('rows'));
    }

    public function edit(Calificacion $model){

        return view('valoracion.calificaciones.edit',compact('model'));
    }

    public function add(){
        return view('valoracion.calificaciones.add');
    }

    public function store(Request $request){
        $campos=$this->validate($request,$this->rules);
        $model=Calificacion::query()->create($campos);
        $model->save();
        return redirect()->route('calificacion');
    }

    public function update(Calificacion $model,Request $request){
        $campos=$this->validate($request,$this->rules);
        $model->fill($campos);
        $model->save();
        return redirect()->route('calificacion');
    }

    public function destroy(Calificacion $model){
        $model->delete();
        return redirect()->route('calificacion');
    }
}
