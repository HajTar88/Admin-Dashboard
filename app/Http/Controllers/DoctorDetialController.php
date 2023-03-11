<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoctorDetialController extends Controller
{
    public function index($id)
    {
        $hospitals = Hospital::find($id);
        $hospitals = Hospital::all();
        return view('doctordetial.index');
    }
}
?>