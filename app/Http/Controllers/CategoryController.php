<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('categories.categories', [
            'categories' => Category::simplePaginate(5),
        ]);
    }

    public function store(Request $request)
    {
        Category::create($request->all());

        return redirect(route('categories.index'))
            ->with('success', 'Kategori berhasil ditambahkan!');
    }

    public function update(Request $request, Category $category)
    {
        Category::where('id', $category->id)->update([
            'name' => $request->name
        ]);

        return redirect(route('categories.index'))
            ->with('success', 'Kategori berhasil diubah!');
    }

    public function destroy(Category $category)
    {
        Category::destroy($category->id);

        return redirect(route('categories.index'))
            ->with('success', 'Kategori berhasil dihapus!');
    }
}
