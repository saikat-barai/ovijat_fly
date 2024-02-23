<?php

use App\Http\Controllers\Frontend\FlagController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Frontend\VisaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [FrontendController::class, 'home'])->name('home');
Route::get('/umrah', [FrontendController::class, 'umrah'])->name('umrah');
Route::get('/umrah/details', [FrontendController::class, 'umrah_details'])->name('umrah.details');
Route::get('/visa', [VisaController::class, 'visa'])->name('visa');
Route::get('/visa/details', [VisaController::class, 'visa_details'])->name('visa.details');
Route::get('/flag/display', [FlagController::class, 'flag_display'])->name('flag.display');



// backend route start
 
// backend route end