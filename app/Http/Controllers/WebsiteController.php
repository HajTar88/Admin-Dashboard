<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Companies;
use App\Models\Hospital;
use App\Models\Contacts;


class WebsiteController extends Controller
{
    public function index()
    {
        $companies = companies::all();
        $hospitals = Hospital::all();
        // dd($companies);
        return view('website.index', compact('companies'), compact('hospitals'));
        
    }
    public function create()
    {
        return view('companies.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' =>'required|max:255',
            'email' =>'required',
            'message' =>'required',
        ],
        [
          'name.required'=>'اسم الشركة مطلوب',
          'email.required'=>'العنوان مطلوب',
          'message.required'=>'رقم الهاتف مطلوب',
        ]
    );
           
        $contact = contacts::create([
             'name' =>$request->name,
             'email' =>$request->email,
             'message' =>$request->message,
              // \DB::table('companies')->insert(['company_code'=>$id ,'company_name' =>$request->company_name,'address' =>$request->address,'phone' =>$request->phone,'photo' =>$photo,]),

        ]);
        return redirect()->route('index.index')->with('success','تمت الاضافة بنجاح');
        // ->route('reservations')->with('success','تمت الاضافة بنجاح')
    }
    
}
?>