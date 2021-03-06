<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\guests;
use Brian2694\Toastr\Facades\Toastr;

class guestController extends Controller
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
            'name' => $request->name,
            'location'   => $request->location,
            'checkInn'  => $request->checkInn, 
            'checkOut'   => $request->checkOut, 
            'date'  => date("Y-m-d"),
          
        ];
       // return   $data;
        $result = guests::create($data);
if($result != null){
    // Toastr::success('Thanks For Submission :)','Success');
 return redirect()->back()->with("msg","Thanks For Submission :) ,Success");

}else{
    // Toastr::error('Failed to Data Submission ','Failed');
     return redirect()->back()->with("msg","Failed to Data Submission,Failed");;

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
