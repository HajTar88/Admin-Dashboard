<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacts;

class ContactsController extends Controller
{
    public function index()
    {
        $contact = contacts::latest()->paginate(20);
        return view('website.contact' , compact('contact'));
    }
    public function show($id)
    {
        $contact = contacts::find($id);
        return view('website.show' , compact('contact'))->with('contacts', $contact);
    }
}
