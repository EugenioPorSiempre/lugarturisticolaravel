<?php

namespace App\Http\Controllers;

use App\Models\Calificacion;
use App\Models\Comentario;
use App\Models\Lugar;
use App\Models\User;
use Illuminate\Http\Request;


class DetalleController extends Controller
{
    public function index(){

        $calificaciones = Calificacion::all();
        $comentarios = Comentario::all();
        $lugares = Lugar::all();
        $usuarios = User::all();

        return view('app.detallesLugares.index', compact('calificaciones','comentarios','lugares','usuarios'));
        
    }
    
}
