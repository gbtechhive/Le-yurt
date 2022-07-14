<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\carRental;


class carRentalController extends Controller
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
     //   return $request;
        $data = [
            'fullName' => $request->fullName,
            'leavingFrom'   => $request->leavingFrom,
            'leavingTo'  => $request->leavingTo, 
            'departureDate'   => $request->departureDate, 
            'cellno'   => $request->cellno, 
            'vehicle'   => $request->vehicle, 
            'date'  => date("Y-m-d"),
          
        ];

        $result = carRental::create($data);
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
}
