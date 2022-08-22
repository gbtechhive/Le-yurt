<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Booking_DetailController extends Controller
{
    function Show_BookingDetail() {
        return view('BookingDetails');
    }
}
