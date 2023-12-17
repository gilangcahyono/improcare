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
        return view('stockouts.stockouts', [
            'stockouts' => StockOut::all(),
            'customers' => Customer::all(),
        ]);
    }

    public function store(Request $request)
    {

        $product =  Product::firstWhere('barcode', $request->barcode);

        $validatedData =  $request->validate([
            'barcode' => ['required', 'string'],
            'total' => ['required', 'integer'],
            'customer' => ['required', 'string'],
            'information' => ['required', 'string'],
            'created_at' => ['required', 'date'],
        ]);

        $validatedData['product'] = $product->name;

        StockOut::create($validatedData);

        Product::where('barcode', $request->barcode)->update([
            'stock' => $product->stock - $request->total
        ]);

        return redirect(route('stockouts.index'))->with('success', 'Data berhasil ditambahkan!');
    }

    public function destroy(StockOut $stockout)
    {
        StockOut::destroy($stockout->id);

        return redirect(route('stockouts.index'))->with('success', 'Data berhasil dihapus!');
    }
}
