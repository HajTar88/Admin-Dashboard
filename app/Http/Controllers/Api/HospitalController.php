<?php

namespace App\Http\Controllers\Api;
use App\Models\Hospital;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Api\ApiResponse;
use App\Http\Resources\HospitalResource;



class HospitalController extends Controller
{
   use ApiResponse;
   
   public function index()
{
 
   $hospitals = \App\Models\Hospital::all();
   return $this->apiResponse($hospitals, 200 ,'ok');
}
   
public function show($id)
{
 
   $hospital = Hospital::find($id);

   if($hospital){
      return $this->apiResponse($hospital, 200 ,'ok');
   }
   return $this->apiResponse(null, 404 ,'This hospital not found ');
   
}

public function store(Request $request){

   $hospital= $request->validate([
      "hospital_code"=>"required|string|min:5",
      "hospital_name"=>"required",
      "hospital_address"=>"required",
      "phone"=>"required",
      "password"=>"required",

   ]);
   $hospital = Hospital::create($hospital);

   if($hospital){
      return $this->apiResponse($hospital, 200 ,'The hospital has been saved');
   }
   return $this->apiResponse(null, 404 ,'This hospital not saved ');

}

public function update(Request $request, $id){
   $hospital= Hospital::find($id);
   
      $hospital->update($request->all());
      if($hospital){
         return $this->apiResponse($hospital, 200 ,'This hospital has been saved ');
}

}

public function destroy($id){
  
   $hospital= Hospital::find($id);
   if(!$hospital){
      return $this->apiResponse(null, 404 ,'This hospital not saved '); 
   }
   else {
      $hospital->delete($id);
      return $this->apiResponse(null, 200 ,'This hospital has been delete ');
   }

  
 }
}

