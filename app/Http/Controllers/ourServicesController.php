<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ourServicesController extends Controller
{
    function ShowOurService () {
        return view ('Ourservice');
    }
}
