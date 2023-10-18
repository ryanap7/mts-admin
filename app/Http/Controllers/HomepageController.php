<?php

namespace App\Http\Controllers;

use App\Models\Catalog;
use App\Models\Contact;
use App\Models\Product;
use App\Models\Statistic;

class HomepageController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        $products = Product::whereStatus(true)->orderBy('id', 'desc')->get();
        $contact = Contact::first();
        $bestSeller = Product::whereStatus(true)->inRandomOrder()->get();
        $statistics = Statistic::all();
        $catalog = Catalog::whereNull('product_id')->first();
        return view('clients.homepage', compact('products', 'contact', 'bestSeller', 'statistics', 'catalog'));
    }
}
