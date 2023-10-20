<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Contact;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $contact = Contact::first();
        $products = Product::whereStatus(true)->orderBy('name', 'asc')->get();
        return view('clients.product', compact('contact', 'products'));
    }

    public function show(Product $product)
    {
        $contact = Contact::first();
        return view('clients.detail-product', compact('product', 'contact'));
    }

    public function productCategory(Category $category)
    {
        $contact = Contact::first();
        $products = Product::whereStatus(true)->where('category_id', $category->id)->orderBy('name', 'asc')->get();
        return view('clients.product', compact('products', 'contact', 'category'));
    }
}
