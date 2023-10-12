<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index()
    {
        $brands = Brand::all();

        return response()->json($brands);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Brand::create([
            'name' => $request->name,
        ]);

        return response()->json(['message' => 'Brand saved successfully']);
    }

    public function show($id)
    {
        $brand = Brand::find($id);

        if (!$brand) {
            return response()->json(['message' => 'Brand not found'], 404);
        }

        return response()->json($brand);
    }

    public function update(Request $request, $id)
    {
        $brand = Brand::find($id);

        if (!$brand) {
            return response()->json(['message' => 'Brand not found'], 404);
        }
        $name = $request->input('name');

        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $brand->name = $name;
        $brand->save();

        return response()->json(['message' => 'Brand updated', 'data' => $brand]);
    }

    public function destroy($id)
    {
        $brand = Brand::find($id);

        if (!$brand) {
            return response()->json(['message' => 'Brand not found'], 404);
        }

        $brand->delete();

        return response()->json(['message' => 'Brand deleted'], 204);
    }
}
