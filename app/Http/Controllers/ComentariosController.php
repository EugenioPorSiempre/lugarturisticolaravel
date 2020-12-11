<?php

namespace App\Http\Controllers;

use App\Models\Comentario;
use Illuminate\Http\Request;

class ComentariosController extends Controller
{
    public $rules = [
        'comentario' => ['string']
    ];

    public function index(Request $request)
    {

        $rows = Comentario::query()
            ->orderBy('id', 'desc')
            ->get();

        return view('valoracion.comentarios.index', compact('rows'));
    }

    public function edit(Comentario $model){

        return view('valoracion.comentarios.edit',compact('model'));
    }

    public function add(){
        return view('valoracion.comentarios.add');
    }

    public function store(Request $request){
        $campos=$this->validate($request,$this->rules);
        $model=Comentario::query()->create($campos);
        $model->save();
        return redirect()->route('comentario');
    }

    public function update(Comentario $model,Request $request){
        $campos=$this->validate($request,$this->rules);
        $model->fill($campos);
        $model->save();
        return redirect()->route('comentario');
    }

    public function destroy(Comentario $model){
        $model->delete();
        return redirect()->route('comentario');
    }
}
