<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Contact;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $contact = Contact::first();
        $brands = Brand::whereStatus(true)->orderBy('name', 'asc')->get();
        return view('clients.brand', compact('contact', 'brands'));
    }
}
