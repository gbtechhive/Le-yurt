<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controllerNews extends Controller
{
   function showNews(){
    return view('news');
   }
}
