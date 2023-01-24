<?php

namespace App\Http\Controllers;
use App\Models\Hospital;
use App\Models\Companies;
use App\Models\Doctors;
use Illuminate\Http\Request;


class DashBoardController extends Controller
{
    public function index()
    {
        $hospitals = Hospital::count();
        $companies = Companies::count();
        $doctors = Doctors::count();
        return view('info', compact('hospitals', 'companies', 'doctors'));
    }
}
