<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    function home(){
        return view('frontend.pages.home');
    }

    // umrah page view 
    function umrah(){
        return view('frontend.pages.umrah');
    }

    // umrah details 
    function umrah_details(){
        return view('frontend.pages.umrah_details');
    }
    
}
