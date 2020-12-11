<?php

namespace App\Http\Controllers;

use App\Models\Barrio;
use App\Models\Color;
use App\Models\Cooperativa;
use App\Models\Lugar;
use App\Models\Tipo;
use Illuminate\Http\Request;

class ApiAppsController extends Controller
{
    public function colores(Request $request)
    {
        $rows = Color::query()
            ->when($request->buscar, function ($query) use ($request) {
                $buscar = "%" . $request->buscar . "%";
                $query->where('color', 'ilike', $buscar);
            })
            ->get();
        $data = [
            'data' => $rows
        ];
        return response()->json($data, 200);
    }

    public function cooperativas(Request $request)
    {
        $rows = Cooperativa::query()
            ->when($request->buscar, function ($query) use ($request) {
                $buscar = "%" . $request->buscar . "%";
                $query->where('cooperativa', 'ilike', $buscar);
            })
            ->get();
        $data = [
            'data' => $rows
        ];
        return response()->json($data, 200);
    }

    public function barrios(Request $request)
    {
        $rows = Barrio::query()
            ->when($request->buscar, function ($query) use ($request) {
                $buscar = "%" . $request->buscar . "%";
                $query->where('barrio', 'ilike', $buscar);
            })
            ->get();
        $data = [
            'data' => $rows
        ];
        return response()->json($data, 200);
    }

    public function tipos(Request $request)
    {
       
        $rows = Tipo::all();
        $data = [
            'data' => $rows
        ];
        return response()->json($data, 200);
    }

    public function lugar()
    {
        $rows = Lugar::all();
        $data = [
            'data' => $rows
        ];
        return response()->json($data, 200);
    }
}
