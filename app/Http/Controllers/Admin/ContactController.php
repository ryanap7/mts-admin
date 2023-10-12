<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contact = Contact::first();
        return view('apps.contacts.index', compact('contact'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'phone' => 'required',
            'email' => 'required|email',
            'address' => 'required',
            'google_map_link' => 'required|url',
        ]);

        $contact = Contact::first();

        $contact->update([
            'phone' => $request->phone,
            'email' => $request->email,
            'address' => $request->address,
            'google_map_link' => $request->google_map_link,
        ]);

        return response()->json(['message' => 'Contact updated successfully']);
    }
}
