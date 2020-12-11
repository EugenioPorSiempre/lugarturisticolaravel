<?php

namespace App\Http\Controllers;

use App\Models\Combustible;
use Illuminate\Http\Request;
use Collective\Html\Eloquent\FormAccessible;

class CombustibleController extends Controller
{

    public function index(Request $request)
    {
        $rows = Combustible::query()
            ->orderBy('id', 'desc')
            ->get();

        return view('catalogos.combustible.index', compact('rows'));
    }

    public function add()
    {
        return view('catalogos.combustible.add');
    }

    public function show(Combustible $model)
    {
        return view('catalogos.combustible.edit', compact('model'));
    }

    public function store(Request $request)
    {
        $model = new Combustible;

        $model->combustible = $request->combustible;

        $model->save();

        return redirect()->route('combustible');
    }

    public function update(Combustible $model, Request $request)
    {
        $model->combustible = $request->combustible;

        $model->save();

        return redirect()->route('combustible');
    }

    public function destroy(Combustible $model)
    {
        $model->delete();
        return redirect()->route('combustible');
    }
}
