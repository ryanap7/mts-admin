<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Contact;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function index()
    {
        $contact = Contact::first();
        $brands = Brand::whereStatus(true)->get();
        $categories = Category::whereBelongsTo($brands)->orderBy('name', 'asc')->get();
        return view('clients.category', compact('contact', 'categories'));
    }

    public function brandCategory(Brand $brand)
    {
        $contact = Contact::first();
        $categories = Category::where('brand_id', $brand->id)->get();
        return view('clients.category', compact('contact', 'brand', 'categories'));
    }
}
