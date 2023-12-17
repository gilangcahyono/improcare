<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\StockIn;
use App\Models\Supplier;
use Illuminate\Http\Request;

class StockInController extends Controller
{
    public function index()
    {
        return view('stockins.stockins', [
            'stockins' => StockIn::all(),
            'suppliers' => Supplier::all(),
        ]);
    }

    public function store(Request $request)
    {

        $product =  Product::firstWhere('barcode', $request->barcode);

        $validatedData =  $request->validate([
            'barcode' => ['required', 'string'],
            'total' => ['required', 'integer'],
            'supplier' => ['required', 'string'],
            'information' => ['required', 'string'],
            'created_at' => ['required', 'date'],
        ]);

        $validatedData['product'] = $product->name;

        StockIn::create($validatedData);

        Product::where('barcode', $request->barcode)->update([
            'stock' => $product->stock + $request->total
        ]);

        return redirect(route('stockins.index'))->with('success', 'Data berhasil ditambahkan!');
    }

    public function destroy(StockIn $stockin)
    {
        StockIn::destroy($stockin->id);

        return redirect(route('stockins.index'))->with('success', 'Data berhasil dihapus!');
    }
}
