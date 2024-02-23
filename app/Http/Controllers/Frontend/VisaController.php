<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VisaController extends Controller
{
    function visa(){
        return view('frontend.pages.visa');
    }

    function visa_details(){
        return view('frontend.pages.visa_details');
    }
}
