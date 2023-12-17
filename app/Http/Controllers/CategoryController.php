<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('categories.categories', [
            'categories' => Category::all(),
        ]);
    }

    public function store(Request $request)
    {
        $validatedData =  $request->validate([
            'name' => ['required', 'string'],
        ]);

        $validatedData['image'] = uniqid();

        Category::create($validatedData);

        return redirect(route('categories.index'))->with('success', 'Kategori berhasil ditambahkan!');
    }

    public function update(Request $request, Category $category)
    {
        $validatedData =  $request->validate([
            'name' => ['required', 'string'],
        ]);

        Category::where('id', $category->id)->update($validatedData);

        return redirect(route('categories.index'))->with('success', 'Kategori berhasil diubah!');
    }

    public function destroy(Category $category)
    {
        Category::destroy($category->id);

        return redirect(route('categories.index'))->with('success', 'Kategori berhasil dihapus!');
    }
}
