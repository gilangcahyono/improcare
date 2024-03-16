<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\Product;
use App\Models\StockOut;
use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\View\View;

class StockOutController extends Controller
{
    public function index()
    {
        if (request('date')) {
            $stockouts = Invoice::latest()
                // ->whereBetween('updated_at', [(request('date')), (request('date'))])
                ->whereDate('updated_at', '>=', request('date'))
                ->whereDate('updated_at', '<=', request('date'))
                ->where('done', true)
                ->where('sent', true)
                ->with('materialrequests')
                ->simplePaginate(5);

            // return $stockouts;
        } else {
            $stockouts = Invoice::latest()
                ->where('done', true)
                ->where('sent', true)
                ->with('materialrequests')
                ->simplePaginate(5);
        }

        return view('stockouts.stockouts', [
            'invoices' => $stockouts,
            'suppliers' => Supplier::all(),
        ]);
    }

    public function store(Request $request)
    {
        $product =  Product::firstWhere('name', $request->productName);

        if ($request->total > $product->stock) {
            return back()->with('overQty', "Maksimal jumlah $product->stock");
        }

        StockOut::create([
            'barcode' => $product->barcode,
            'total' => $request->total,
            'supplier' => $request->supplier,
            'information' => $request->information,
            'created_at' => $request->created_at,
            'product' => $product->name,
        ]);

        Product::where('barcode', $product->barcode)
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

    public function print(String $name)
    {
        $products = Invoice::where('name', '=', $name)->with('materialrequests')->first()->materialrequests;

        return view('stockouts.print', [
            'products' => $products,
        ]);
    }
}
