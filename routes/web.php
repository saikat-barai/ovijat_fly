<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UmrahController;
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
Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

// umrah route start 
Route::get('/umrahh', [UmrahController::class, 'umrah'])->name('umrahh');
Route::get('/umrah/add', [UmrahController::class, 'umrah_add'])->name('umrah.add');
Route::post('/umrah/store', [UmrahController::class, 'umrah_store'])->name('umrah.store');

// umrah package 
Route::get('/umrah/package', [UmrahController::class, 'umrah_package'])->name('umrah.package');


// umrah duration 
Route::post('/umrah/duration/store', [UmrahController::class, 'umrah_duration_store'])->name('umrah.duration.store');


Route::post('/umrah/package/type/store', [UmrahController::class, 'umrah_package_type_tore'])->name('umrah.package.type.store');

Route::get('/add/umrah', [UmrahController::class, 'add_umrah'])->name('add.umrah');
// umrah route end
// backend route end