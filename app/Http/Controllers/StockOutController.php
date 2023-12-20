<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Product;
use App\Models\StockOut;
use Illuminate\Http\Request;

class StockOutController extends Controller
{
    public function index()
    {
        $stockouts = StockOut::where('product', 'like', '%' . request('search') . '%')
            ->orWhere('barcode', 'like', '%' . request('search') . '%')
            ->simplePaginate(5)
            ->withQueryString();

        return view('stockouts.stockouts', [
            'stockouts' => $stockouts,
            'customers' => Customer::all(),
        ]);
    }

    public function store(Request $request)
    {
        $product =  Product::firstWhere('barcode', $request->barcode);

        StockOut::create([
            'barcode' => $request->barcode,
            'total' => $request->total,
            'customer' => $request->customer,
            'information' => $request->information,
            'created_at' => $request->created_at,
            'product' => $product->name,
        ]);

        Product::where('barcode', $request->barcode)
            ->update([
                'stock' => $product->stock - $request->total
            ]);

        return redirect(route('stockouts.index'))
            ->with('success', 'Data berhasil ditambahkan!');
    }

    public function destroy(StockOut $stockout)
    {
        StockOut::destroy($stockout->id);

        return redirect(route('stockouts.index'))
            ->with('success', 'Data berhasil dihapus!');
    }
}
