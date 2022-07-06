<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class localCuisineController extends Controller
{
    function ShowLocalCuisine () {
        return view('localCuisine');
    }
}
