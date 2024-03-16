<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\Product;
use App\Models\StockIn;
use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class StockInController extends Controller
{
    public function index()
    {
        if (request('date')) {
            $stockins = StockIn::latest()->whereBetween('created_at', [(request('date')), (request('date'))])->simplePaginate(5);
        } else {
            $stockins = StockIn::latest()->simplePaginate(5);
        }

        return view('stockins.stockins', [
            'stockins' => $stockins,
            'suppliers' => Supplier::all(),
            'products' => Product::all(),
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
