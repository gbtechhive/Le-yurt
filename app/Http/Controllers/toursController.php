<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tourGuide;

class toursController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // return $request;

        $data = [
            'fullName' => $request->fullName,
            'location'   => $request->location,
            'language'  => $request->language, 
            'cellno'   => $request->cellno, 
            'gender'   => $request->gender, 
            'date'  => date("Y-m-d"),
          
        ];

        $result = tourGuide::create($data);
if($result != null){
return redirect()->back()->with("success","Thanks For Submission");;

}else{
    return redirect()->back()->with("error","Failed to Data Submission");

}
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function guestReservation(Request $request)
    {
        return $request;
    }


    public function airTicketReservation(Request $request)
    {
        return $request;
    }

    public function carRentalReservation(Request $request)
    {
        return $request;
    }

    
    public function tourGuideReservation(Request $request)
    {
        return $request; 
    }
}
