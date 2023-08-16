<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('menu.unit.index', [
            'title' => 'Unit',
            'units' => Unit::orderBy('name')->get()
        ]);
    }

    public function addUnit(Request $request)
    {
        Unit::create($request->all());
        return response()->json(['success' => true]);
    }

    public function editUnit(Request $request, Unit $unit)
    {
        $unit = Unit::find($request->id);
        $unit->update($request->all());
        return response()->json(['success' => true]);
    }

    public function getDataUnit()
    {
        $units = Unit::all();
        return response()->json($units);
    }
}
