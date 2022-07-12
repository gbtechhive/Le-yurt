<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class yurtController extends Controller
{
    function showYurts () {
        return view('yurts');
    }
}
