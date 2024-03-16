<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Supplier;
use App\Models\Unit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function index(): View
    {
        $products = Product::latest()
            ->where('name', 'like', '%' . request('search') . '%')
            ->orWhere('barcode', 'like', '%' . request('search') . '%')
            ->simplePaginate(5)
            ->withQueryString();

        return view('products.products', [
            'products' => $products,
            'categories' => Category::all(),
            'units' => Unit::all(),
            'suppliers' => Supplier::all(),
        ]);
    }

    public function show(string $product)
    {
        if (!Gate::any(['admin', 'sales-manager', 'service-operator'])) {
            return abort(403);
        }

        return response()->json(
            Product::select('stock')
                ->where('name', '=', $product)
                ->get()
        );
    }

    public function store(Request $request)
    {
        $data = $request->all();

        if ($request->file('image')) {

            $data['image'] = $request->file('image')->store('product-image');
        }

        Product::create($data);

        return redirect(route('products.index'))
            ->with('success', 'Produk berhasil ditambahkan!');
    }

    public function update(Request $request, Product $product)
    {
        $data =  [
            'barcode' => $request->barcode,
            'name' => $request->name,
            'price' => $request->price,
            'stock' => $request->stock,
            'category' => $request->category,
            'unit' => $request->unit,
            'supplier' => $request->supplier,
        ];

        if ($request->file('image')) {

            Storage::delete($product->image);

            $data['image'] = $request->file('image')->store('product-image');
        }

        Product::where('id', $product->id)->update($data);

        return redirect(route('products.index'))
            ->with('success', 'Product berhasil diubah!');
    }

    public function destroy(Product $product)
    {
        Product::destroy($product->id);

        return redirect(route('products.index'))
            ->with('success', 'Produk berhasil dihapus!');
    }

    // public function autocomplete(Request $request)
    // {
    //     if (!Gate::any(['admin', 'sales-manager', 'service-operator'])) {
    //         return abort(403);
    //     }

    //     $products = Product::select('name')
    //         ->where('name', 'like', '%' . $request['query'] . '%')
    //         ->get();

    //     return response()->json($products);
    // }

    public function print(): View
    {
        if (!Gate::authorize('admin')) {
            return abort(403);
        }

        return view('products.print', [
            'products' => Product::all(),
        ]);
    }
}
