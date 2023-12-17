<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index()
    {
        return view('suppliers.suppliers', [
            'suppliers' => Supplier::all()
        ]);
    }

    public function store(Request $request)
    {
        $validatedData =  $request->validate([
            'name' => ['required', 'string'],
            'phone' => ['required', 'string'],
            'address' => ['required', 'string'],
            'information' => ['required', 'string'],
        ]);

        Supplier::create($validatedData);

        return redirect(route('suppliers.index'))->with('success', 'Pemasok berhasil ditambahkan!');
    }

    public function update(Request $request, Supplier $supplier)
    {
        $validatedData =  $request->validate([
            'name' => ['required', 'string'],
            'phone' => ['required', 'string'],
            'address' => ['required', 'string'],
            'information' => ['required', 'string'],
        ]);

        Supplier::where('id', $supplier->id)->update($validatedData);

        return redirect(route('suppliers.index'))->with('success', 'Pemasok berhasil diubah!');
    }

    public function destroy(Supplier $supplier)
    {
        Supplier::destroy($supplier->id);

        return redirect(route('suppliers.index'))->with('success', 'Pemasok berhasil dihapus!');
    }
}
