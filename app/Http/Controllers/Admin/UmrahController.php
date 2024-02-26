<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Umrah;
use App\Models\UmrahDuration;
use App\Models\UmrahPackage;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class UmrahController extends Controller
{
    function umrah(){
        $umrahs = Umrah::all();
        return view('backend.umrah.umrah', compact('umrahs'));
    }

    // umrah add view 
    function umrah_add(){
        $durations = UmrahDuration::all();
        $types = UmrahPackage::all();
        return view('backend.umrah.add_umrah', compact('durations', 'types'));
    }
    // umrah store 
    function umrah_store(Request $request){
        $validatedData = $request->validate([
            'title' => ['required','max:255'],
            'image' => ['required'],
            'duration' => ['required'],
            'beds' => ['required'],
            'price' => ['required', 'max:255'],
            'type' => ['required'],
        ]);
        $image = $request->image;
        $manager = new ImageManager(new Driver());
        $name_gen = hexdec(uniqid()).'.'. $image->getClientOriginalExtension();
        $image = $manager->read($image);
        $image->save(public_path('images/umrah/'.$name_gen));
        Umrah::insert([
            'title' => $request->title,
            'image' => $name_gen,
            'duration' => $request->duration,
            'beds' => $request->beds,
            'price' => $request->price,
            'type' => $request->type,
            'overview' => $request->overview,
            'including' => $request->including,
            'excluding' => $request->excluding,
            'requirements' => $request->requirements,
            'condition' => $request->condition,
            'created_at' => Carbon::now(),
        ]);
        return back();
    }
    // umrah package 
    function umrah_package(){
        $durations = UmrahDuration::all();
        $types = UmrahPackage::all();
        return view('backend.umrah.umrah_package', compact('durations', 'types'));
    }
    // duration 
    function umrah_duration_store(Request $request){
        $validatedData = $request->validate([
            'duration' => ['required','max:255'],
        ]);
        UmrahDuration::insert([
            'duration' => $request->duration,
            'created_at' => Carbon::now(),
        ]);
        return back();
    }

    // package type 
    function umrah_package_type_tore(Request $request){
        $validatedData = $request->validate([
            'type' => ['required','max:255'],
        ]);
        UmrahPackage::insert([
            'type' => $request->type,
            'created_at' => Carbon::now(),
        ]);
        return back();
    }
    function add_umrah(){
        return view('backend.umrah.add_umrah');
    }
}
