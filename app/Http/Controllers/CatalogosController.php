<?php

namespace App\Http\Controllers;

use App\Models\Barrio;
use App\Models\Combustible;
use Illuminate\Http\Request;

class CatalogosController extends Controller
{
    public function getCombustibles(Request $request)
    {

        $rows=Combustible::query()
        ->get();

        $data=[
            'data'=>$rows
        ];

        return response()->json($data);
    }
}
