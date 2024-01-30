<?php

// app/Http/Controllers/CategoryController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Category::create([
            'name' => $request->input('name'),
        ]);

        return redirect()->route('category.create')->with('success', 'Category created successfully!');
    }
    public function index()
    {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    public function destroy(Category $category)
{
    $category->delete();

    return redirect()->route('category.index')->with('success', 'Category deleted successfully!');
}

}
