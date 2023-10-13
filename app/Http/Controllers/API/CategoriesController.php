<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Category::with('brand')->get();
        return response()->json($categories);
    }

    public function store(Request $request)
    {
        $request->validate([
            'brand_id' => 'required',
            'name' => 'required|string|max:255',
        ]);
        Category::create([
            'brand_id' => $request->brand_id,
            'name' => $request->name,
        ]);

        return response()->json(['message' => 'Category saved successfully']);
    }

    public function show($id)
    {
        $category = Category::with('brand')->find($id);

        if (!$category) {
            return response()->json(['message' => 'Category not found'], 404);
        }

        return response()->json($category);
    }

    public function update(Request $request, $id)
    {
        $category = Category::find($id);

        if (!$category) {
            return response()->json(['message' => 'Category not found'], 404);
        }
        $brand_id = $request->input('brand_id');
        $name = $request->input('name');

        $request->validate([
            'brand_id' => 'required',
            'name' => 'required|string|max:255',
        ]);

        $category->brand_id = $brand_id;
        $category->name = $name;
        $category->save();

        return response()->json(['message' => 'Category updated', 'data' => $category]);
    }

    public function destroy($id)
    {
        $category = Category::find($id);

        if (!$category) {
            return response()->json(['message' => 'Category not found'], 404);
        }

        $category->delete();

        return response()->json(['message' => 'Category deleted'], 204);
    }
}
