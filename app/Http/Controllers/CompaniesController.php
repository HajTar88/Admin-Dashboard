<?php

namespace App\Http\Controllers;

use App\Models\Companies;
use Illuminate\Http\Request;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class CompaniesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = companies::latest()->paginate(4);
        return view('companies.index' , compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('companies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'company_name' =>'required|max:255',
            'address' =>'required',
            'phone' =>'required',
            'photo' =>'required',
            'services' =>'required',
        ],
        [
          'company_name.required'=>'اسم الشركة مطلوب',
          'address.required'=>'العنوان مطلوب',
          'phone.required'=>'رقم الهاتف مطلوب',
          'photo.required'=>'الصورة مطلوبة',
          'services.required'=>'نوع الخدمة مطلوبة',
        ]
    );
           
        $photo = request('photo')->store('uploads/img', 'public');
        $id = IdGenerator::generate(['table' => 'companies', 'field' =>'company_code', 'length' => 8, 'prefix' => 'COM-']);
        $companies = companies::create([
            'company_code' => $id,
             'company_name' =>$request->company_name,
             'address' =>$request->address,
             'phone' =>$request->phone,
             'photo' =>$photo,
             'services' =>$request->services,
              // \DB::table('companies')->insert(['company_code'=>$id ,'company_name' =>$request->company_name,'address' =>$request->address,'phone' =>$request->phone,'photo' =>$photo,]),

        ]);
        return redirect()->route('Companies.index')->with('success','تمت الاضافة بنجاح');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Companies  $companies
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $companies = Companies::find($id);
        return view('Companies.show' , compact('companies'))->with('Companies', $companies);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Companies  $companies
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $companies = Companies::find($id);
        return view('companies.modify');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Companies  $companies
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $request->validate([
            'company_name' =>'required|max:255',
            'address' =>'required',
            'phone' =>'required',
            'photo' =>'required',
            'services' =>'required',
        ],
        [
          'company_name.required'=>'اسم الشركة مطلوب',
          'address.required'=>'العنوان مطلوب',
          'phone.required'=>'رقم الهاتف مطلوب',
          'photo.required'=>'الصورة مطلوبة',
          'services.required'=>'نوع الخدمة مطلوبة',
        ]);
        $photo = request('photo')->store('uploads/img', 'public');
        $companies = Companies::find($id);
        $companies->update([
            'company_name' =>$request->company_name,
            'address' =>$request->address,
            'phone' =>$request->phone,
            'photo' =>$photo,
            'services' =>$request->services,
        ]);
        #Check if uploaded file already exist in Folder

        return redirect()->route('Companies.index')->with('succe','تم التعديل بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Companies  $companies
     * @return \Illuminate\Http\Response
     */
    // public function destroy(Companies $companies)
    // {
    //     $companies->delete();
    //     return redirect()->route('Companies.index')->with('succes','companies delete Successfully');
    // }
    public function remove($id)
    {
        $companies = Companies::find($id);
        $companies->delete();
        return redirect()->route('Companies.index')->with('succes','تم الحذف بنجاح');
    }
    public function modify($id)
    {
        $companies = Companies::find($id);
        return view('companies.modify' , compact('companies'));
    }
    public function detial($id)
    {
        $companies = Companies::find($id);
        return view('companies.detial', compact('companies'));
    }
}


/*
        $companies = new Companies;
	// $profile->photo = $request->photo;

	// storage/app/photo/random.jpg
	$path = $request->file('photo')->store('public/image');
	$companies->photo = $path;
          /*
      if ($request->hasFile('photo')) {
        $input['photo'] = $ImageNameToStore;
  }/*
        $imageName = time().'.'.$request->photo->extension();
        $request->photo->move(public_path('public/image/company'), $imageName);
    /*    $file_extension = $request->photo->getClientOriginalExtension();
        $file_name = time().'.'.$file_extension;
        $path = 'image/company';
        $request->photo->move($path,$file_extension);
        $photo = $request->photo;
        $newPhoto = time().$photo->getClientOriginalName();
        $photo->move('image/company/'.$newPhoto)->getFilename();;
        /*
        $request->validate(['company_name'=> 'required']);
        if ($request->hasFile('photo')) {
            $destination_path = 'public/image/company';
            $photo = $request->file('photo');
            $photo_name = $photo->getClientOriginalName();
            $path = $request->file('photo')->storeAs($destination_path, $photo_name);
            $input['photo'] = $photo_name;
        }
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $filename = time().'.'.$photo->getClientOriginalExtension();
            $path = 'public/image/company' . $filename;
            //Photo::make($photo->getRealPath())->resize(300, 300)->save($path);
           // $request->replace(['photo' => $path]);
        }
        $input = $request->all();
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $file_extension = $file->getClientOriginalName();
            $destination_path = public_path().'public/image/company';
            $filename = $file_extension;
            $request->file('photo')->move($destination_path, $filename);
            $input['photo'] = $filename;
        }
       // Images::create($input);*/
  
