<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HTController extends Controller
{
    function showHikeTrek () {
        return view('hikeTrek');
    }
}
