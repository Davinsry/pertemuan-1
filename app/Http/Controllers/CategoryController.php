<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class CategoryController extends Controller
{
    public function index()
    {
        Gate::authorize('manage-category');

        $categories = Category::withCount('products')->get();

        return view('category.index', compact('categories'));
    }

    public function create()
    {
        Gate::authorize('manage-category');

        return view('category.create');
    }

    public function store(Request $request)
    {
        Gate::authorize('manage-category');

        $validated = $request->validate([
            'name' => 'required|string|max:255',
        ], [
            'name.required' => 'Nama category wajib diisi.',
            'name.max' => 'Nama category tidak boleh lebih dari 255 karakter.',
        ]);

        Category::create($validated);

        return redirect()->route('category.index')->with('success', 'Category berhasil ditambahkan.');
    }

    public function edit(Category $category)
    {
        Gate::authorize('manage-category');

        return view('category.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        Gate::authorize('manage-category');

        $validated = $request->validate([
            'name' => 'required|string|max:255',
        ], [
            'name.required' => 'Nama category wajib diisi.',
            'name.max' => 'Nama category tidak boleh lebih dari 255 karakter.',
        ]);

        $category->update($validated);

        return redirect()->route('category.index')->with('success', 'Category berhasil diperbarui.');
    }

    public function delete($id)
    {
        Gate::authorize('manage-category');

        $category = Category::findOrFail($id);
        $category->delete();

        return redirect()->route('category.index')->with('success', 'Category berhasil dihapus.');
    }
}
