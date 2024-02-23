<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FlagController extends Controller
{
    function flag_display(){
        return view('frontend.pages.flag_display');
    }
}
