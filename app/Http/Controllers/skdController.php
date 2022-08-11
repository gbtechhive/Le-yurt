<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class skdController extends Controller
{
    function showSkd(){
        return view('skdLocation');
    }
}
