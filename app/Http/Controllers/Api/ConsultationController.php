<?php

namespace App\Http\Controllers\Api;
use App\Models\Consultation;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\ApiResponse;
use App\Http\Resources\ConsultationResource;

class ConsultationController extends Controller
{
    use ApiResponse;
    
    public function index()
 {
  
    $consultations = \App\Models\Consultation::all();
    return $this->apiResponse($consultations, 200 ,'ok');
 }
    
 public function show($id)
 {
  
    $consultation = Consultation::find($id);
 
    if($consultation){
       return $this->apiResponse($consultation, 200 ,'ok');
    }
    return $this->apiResponse(null, 404 ,'This consultation not found ');
    
 }
 
 public function store(Request $request){
 
    $consultation= $request->validate([
       "counseling_text"=>"required",
      
 
    ]);
    $consultation = Consultation::create($consultation);
 
    if($consultation){
       return $this->apiResponse($consultation, 200 ,'The consultation has been saved');
    }
    return $this->apiResponse(null, 404 ,'This consultation not saved ');
 
 }
 
 public function update(Request $request, $id){
    $consultation= Consultation::find($id);
    
       $consultation->update($request->all());
       if($consultation){
          return $this->apiResponse($consultation, 200 ,'This consultation has been saved ');
 }
 
 }
 
 public function destroy($id){
   
    $consultation= Consultation::find($id);
    if(!$consultation){
       return $this->apiResponse(null, 404 ,'This consultation not saved '); 
    }
    else {
       $consultation->delete($id);
       return $this->apiResponse(null, 200 ,'This consultation has been delete ');
    }
   
  }
 }
 