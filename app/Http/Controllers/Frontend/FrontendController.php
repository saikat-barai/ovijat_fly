<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Umrah;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    function home(){
        $umrahs = Umrah::all();
        return view('frontend.pages.home', compact('umrahs'));
    }

    // umrah page view 
    function umrah(){
        $umrahs = Umrah::all();
        return view('frontend.pages.umrah', compact('umrahs'));
    }

    // umrah details 
    function umrah_details(){
        return view('frontend.pages.umrah_details');
    }
    
}
