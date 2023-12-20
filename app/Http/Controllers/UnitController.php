<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    public function index()
    {
        return view('units.units', [
            'units' => Unit::simplePaginate(5),
        ]);
    }

    public function store(Request $request)
    {
        Unit::create($request->all());

        return redirect(route('units.index'))
            ->with('success', 'Satuan berhasil ditambahkan!');
    }

    public function update(Request $request, Unit $unit)
    {
        Unit::where('id', $unit->id)
            ->update([
                'name' => $request->name,
            ]);

        return redirect(route('units.index'))
            ->with('success', 'Satuan berhasil diubah!');
    }

    public function destroy(Unit $unit)
    {
        Unit::destroy($unit->id);

        return redirect(route('units.index'))
            ->with('success', 'Satuan berhasil dihapus!');
    }
}
