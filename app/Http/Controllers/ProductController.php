<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Supplier;
use App\Models\Unit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        return view('products.products', [
            'products' => Product::latest()->paginate(5),
            'categories' => Category::all(),
            'units' => Unit::all(),
            'suppliers' => Supplier::all(),
        ]);
    }

    public function store(Request $request)
    {
        $validatedData =  $request->validate([
            'barcode' => ['required', 'string'],
            'name' => ['required', 'string'],
            'price' => ['required', 'numeric'],
            'stock' => ['required', 'numeric'],
            'category' => ['required', 'string'],
            'unit' => ['required', 'string'],
            'supplier' => ['required', 'string'],
            'image' => ['required', 'image', 'file', 'max:2048'],
        ]);

        $validatedData['image'] = $request->file('image')->store('product-image');

        Product::create($validatedData);

        return redirect(route('products.index'))->with('success', 'Produk berhasil ditambahkan!');
    }

    public function update(Request $request, Product $product)
    {
        $validatedData =  $request->validate([
            'barcode' => ['required', 'string'],
            'name' => ['required', 'string'],
            'price' => ['required', 'numeric'],
            'stock' => ['required', 'numeric'],
            'category' => ['required', 'string'],
            'unit' => ['required', 'string'],
            'supplier' => ['required', 'string'],
        ]);

        if ($request->file('image')) {

            Storage::delete($product->image);

            $validatedData =  $request->validate(['image' => ['image', 'file', 'max:2048']]);

            $validatedData['image'] = $request->file('image')->store('product-image');
        }

        Product::where('id', $product->id)->update($validatedData);

        return redirect(route('products.index'))->with('success', 'Product berhasil diubah!');
    }

    public function destroy(Product $product)
    {
        Product::destroy($product->id);

        return redirect(route('products.index'))->with('success', 'Produk berhasil dihapus!');
    }
}
