<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    public function index()
    {
        return view('units.units', [
            'units' => Unit::all()
        ]);
    }

    public function store(Request $request)
    {
        $validatedData =  $request->validate([
            'name' => ['required', 'string'],
        ]);

        $validatedData['image'] = uniqid();

        Unit::create($validatedData);

        return redirect(route('units.index'))->with('success', 'Satuan berhasil ditambahkan!');
    }

    public function update(Request $request, Unit $unit)
    {
        $validatedData =  $request->validate([
            'name' => ['required', 'string'],
        ]);

        Unit::where('id', $unit->id)->update($validatedData);

        return redirect(route('units.index'))->with('success', 'Satuan berhasil diubah!');
    }

    public function destroy(Unit $unit)
    {
        Unit::destroy($unit->id);

        return redirect(route('units.index'))->with('success', 'Satuan berhasil dihapus!');
    }
}
