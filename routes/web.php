<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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


// 
Route::get('/home',[HomeController::class,'redirect'])->middleware('verified');
Route::get('/',[HomeController::class,'index']);
Route::post('appointment',[HomeController::class,'appointment']);
Route::get('myappointment',[HomeController::class,'myappointment']);

// admin
Route::get('/add_doctor_view',[AdminController::class,'addview']);
Route::get('/showdoctor',[AdminController::class,'showdoctor']);
Route::get('/updatedoctor/{id}',[AdminController::class,'updatedoctor']);
Route::post('/upload_doctor',[AdminController::class,'upload']);
Route::get('/deletedoctor/{id}',[AdminController::class,'deletedoctor']);
Route::post('/editdoctor/{id}',[AdminController::class,'editdoctor']);

Route::get('/cancel_appoint/{id}',[HomeController::class,'cancel_appoint']);
Route::get('/showappointment',[AdminController::class,'showappointment']);
Route::get('/approved/{id}',[AdminController::class,'approved']);
Route::get('/canceled/{id}',[AdminController::class,'canceled']);

Route::get('/emailview/{id}',[AdminController::class,'emailview']);
Route::post('/sendemail/{id}',[AdminController::class,'sendemail']);

// 
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


//
// Auth::routes([
//     'verify' => true
// ]);
