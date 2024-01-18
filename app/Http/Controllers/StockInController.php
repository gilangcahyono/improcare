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
        $stockins = StockIn::where('product', 'like', '%' . request('search') . '%')
            ->orWhere('barcode', 'like', '%' . request('search') . '%')
            ->simplePaginate(5)
            ->withQueryString();

        return view('stockins.stockins', [
            'stockins' => $stockins,
            'suppliers' => Supplier::all(),
        ]);
    }

    public function store(Request $request)
    {
        $product =  Product::firstWhere('name', $request->productName);
        // return $product;

        StockIn::create([
            'barcode' => $product->barcode,
            'total' => $request->total,
            'supplier' => $request->supplier,
            'information' => $request->information,
            'created_at' => $request->created_at,
            'product' => $product->name
        ]);

        Product::where('barcode', $product->barcode)
            ->update([
                'stock' => $product->stock + $request->total
            ]);

        return redirect(route('stockins.index'))
            ->with('success', 'Data berhasil ditambahkan!');
    }

    public function destroy(StockIn $stockin)
    {
        StockIn::destroy($stockin->id);

        return redirect(route('stockins.index'))
            ->with('success', 'Data berhasil dihapus!');
    }
}
