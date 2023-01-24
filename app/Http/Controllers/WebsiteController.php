<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Companies;
use App\Models\Hospital;

class WebsiteController extends Controller
{
    public function index()
    {
        $companies = companies::all();
        $hospitals = Hospital::all();
        // dd($companies);
        return view('website.index', compact('companies'), compact('hospitals'));
    }
    
}
