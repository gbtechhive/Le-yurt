<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class servicesController extends Controller
{
    function showServices () {
        return view('ourServices');
    }
}
