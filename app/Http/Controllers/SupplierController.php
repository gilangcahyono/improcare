<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index()
    {
        return view('suppliers.suppliers', [
            'suppliers' => Supplier::simplePaginate(5),
        ]);
    }

    public function store(Request $request)
    {
        Supplier::create($request->all());

        return redirect(route('suppliers.index'))
            ->with('success', 'Pemasok berhasil ditambahkan!');
    }

    public function update(Request $request, Supplier $supplier)
    {
        Supplier::where('id', $supplier->id)
            ->update([
                'name' => $request->name,
                'phone' => $request->phone,
                'address' => $request->address,
                'information' => $request->information,
            ]);

        return redirect(route('suppliers.index'))
            ->with('success', 'Pemasok berhasil diubah!');
    }

    public function destroy(Supplier $supplier)
    {
        Supplier::destroy($supplier->id);

        return redirect(route('suppliers.index'))
            ->with('success', 'Pemasok berhasil dihapus!');
    }
}
