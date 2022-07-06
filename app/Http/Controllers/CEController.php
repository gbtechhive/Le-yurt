<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CEController extends Controller
{
    function showCE () {
        return view('culturalExperience');
    }
}
