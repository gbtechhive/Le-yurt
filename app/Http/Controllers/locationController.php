<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class locationController extends Controller
{
    function showLocations () {
        return view('location');
    }
}
