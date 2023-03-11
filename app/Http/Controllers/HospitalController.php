<?php

namespace App\Http\Controllers;

use App\Models\Hospital;
use App\Models\Doctors;
use App\Models\Patients;
use App\Models\Rooms;
use App\Models\Wards;
use App\Models\User;
use Hash;
use Illuminate\Http\Request;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use DB;


class HospitalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     //   $product = Product::all();
     $hospitals = Hospital::latest()->paginate(20);
       return view('hospital.index', compact('hospitals'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hospital.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $id = IdGenerator::generate(['table' => 'Hospital', 'field' =>'hospital_code', 'length' => 8, 'prefix' => 'HOS']);
        // $hospitalS = new Hospital();
        // $hospitalS->id = $id;
        // $hospitalS->title = $request->get('title');
        // $hospitalS->save();
        DB::transaction(function()  use ($request) {
        $request->validate([
            'password' => 'required|confirmed|min:6',
            'hospital_name' =>'required|max:255',
            'hospital_address' =>'required',
            'phone' =>'required',
        ],
        [
          'hospital_name.required'=>'اسم المستشفي مطلوب',
          'hospital_name.unique'=>'هذا الاسم موجود مسبقا',
          'hospital_address.required'=>'العنوان مطلوب',
          'phone.required'=>'رقم الهاتف مطلوب',
          'password.required'=>'الرجاء ادخال كلمة السر',
          'password.min'=>' كلمة السر قصيرة جدا',
          'password.confirmed'=>' كلمة السر غير متطابقة',
        ]
    );
        // $config=['table' => 'Hospital', 'field' =>'hospital_code', 'length' => 8, 'prefix' => 'HOS-'];
        $photo = request('photo')->store('uploads/Hos', 'public');
        $config = IdGenerator::generate(['table' => 'HospitalS', 'field' =>'hospital_code', 'length' => 8, 'prefix' => 'HOS']);
        $data = $request->all();
        $check = $this->create($data);
        $hospitals = Hospital::create([
            'hospital_code' => $config,
            'hospital_name' =>$request->hospital_name,
            'hospital_address' =>$request->hospital_address,
            'phone' =>$request->phone,
            'photo' =>$photo,
            'password' =>Hash::make($data['password'])
        ]); 
    
 
    });
        return redirect()->route('hospitals.index')->with('success','تمت الاضافة بنجاح');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hospital  $Hospitals
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $hospitals = Hospital::find($id);
        return view('hospital.show' , compact('hospitals'))->with('hospitals', $hospitals);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\hospitals  $hospitals
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hospitals = Hospital::find($id);
        return view('hospitals.modify');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hospital  $hospitals
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $request->validate([
            'password' => 'required|confirmed|min:6',
            'hospital_name' =>'required|max:255',
            'hospital_address' =>'required',
            'phone' =>'required',
            'photo' => 'required'
        ],
        [
          'hospital_name.required'=>'اسم المستشفي مطلوب',
          'hospital_name.unique'=>'هذا الاسم موجود مسبقا',
          'hospital_address.required'=>'العنوان مطلوب',
          'phone.required'=>'رقم الهاتف مطلوب',
          'password.required'=>'الرجاء ادخال كلمة السر',
          'password.min'=>' كلمة السر قصيرة جدا',
          'password.confirmed'=>' كلمة السر غير متطابقة',
        ]
        );
        $photo = request('photo')->store('uploads/Hos', 'public');
        $hospitals = Hospital::find($id);
        $data = $request->all();
        $check = $this->create($data);
        $hospitals->update([
            'hospital_name' =>$request->hospital_name,
            'hospital_address' =>$request->hospital_address,
            'phone' =>$request->phone,
            'photo' =>$photo,
            'password' =>Hash::make($data['password'])
        ]);
        


        return redirect()->route('hospitals.index')->with('succes','تم التعديل بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hospital  $hospitals
     * @return \Illuminate\Http\Response
     */
    // public function destroy(Hospital $hospitals)
    // {
    //     $hospitals->delete();
    //     return redirect()->route('hospitals.index')->with('success','hospitals delete Successfully');
    // }
    public function remove($id)
    {
        $hospitals = Hospital::find($id);
        $hospitals->delete();
        return redirect()->route('hospitals.index')->with('succe','تم الحذف بنجاح');
    }
    public function modify($id)
    {
        $hospitals = Hospital::find($id);
        return view('hospital.modifyh' , compact('hospitals'));
    }

    public function detial($id)
    {
        $hospitals = Hospital::find($id);
        $hospitals = Hospital::all();
        $doctors = Doctors::where('hospital_id', $id)->count();
        $doctor = Doctors::where('hospital_id', $id)->get();
        $patients = Patients::where('hospital_id', $id)->count();
        $rooms = Rooms::where('hospital_id', $id)->count();
        $wards = Wards::where('hospital_id', $id)->count();
        return view('hospital.detial', compact('hospitals','doctors','doctor','patients','rooms','wards'));
    }

}
?>