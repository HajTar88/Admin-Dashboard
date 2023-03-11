<?php

namespace App\Http\Controllers\Api;
use App\Models\Reservation;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\ApiResponse;
use App\Http\Resources\ReservationResource;


class ReservationController extends Controller
{
    use ApiResponse;
    
    public function index()
 {
  
    $reservations = \App\Models\Reservation::all();
    return $this->apiResponse($reservations, 200 ,'ok');
 }
    
 public function show($id)
 {
  
    $reservation = Reservation::find($id);
 
    if($reservation){
       return $this->apiResponse($reservation, 200 ,'ok');
    }
    return $this->apiResponse(null, 404 ,'This reservation not found ');
    
 }
 
 public function store(Request $request){
 
    $reservation= $request->validate([
       "first_name"=>"required",
       "address"=>"required",
       "phone"=>"required",

 
    ]);
    $reservation = Reservation::create($reservation);
 
    if($reservation){
       return $this->apiResponse($reservation, 200 ,'The reservation has been saved');
    }
    return $this->apiResponse(null, 404 ,'This reservation not saved ');
 
 }
 
 public function update(Request $request, $id){
    $reservation= Reservation::find($id);
    
       $reservation->update($request->all());
       if($reservation){
          return $this->apiResponse($reservation, 200 ,'This reservation has been saved ');
 }
 
 }
 
 public function destroy($id){
   
    $reservation= Reservation::find($id);
    if(!$reservation){
       return $this->apiResponse(null, 404 ,'This reservation not saved '); 
    }
    else {
       $reservation->delete($id);
       return $this->apiResponse(null, 200 ,'This reservation has been delete ');
    }
   
  }
 }
 