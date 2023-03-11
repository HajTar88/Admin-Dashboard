<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Doctors;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /*
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservations = Reservation::latest()->paginate(4);
        $doctors = Doctors::all();
        return view('reservations.index' , compact('reservations', 'doctors'));
    }

    /*
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    
    /* Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $doctors = Doctors::all();
        $reservation = Reservation::create([
            'first_name'=>$request->first_name,
            'address'=>$request->address,
            'phone'=>$request->phone,
            'chdoctor'=>$request->chdoctor,

        ]);
        return redirect()->route('index.index', compact('doctors'))->with('success','reservations add Successfully');
    }

    
     /* Display the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function show(Reservation $reservation)
    {
        //
    }

    
     /* Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservation $reservation)
    {
        //
    }

    
     /* Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reservation $reservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservation $reservation)
    {
        //
    }
}
?>