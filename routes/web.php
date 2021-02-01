<?php

use App\Http\Controllers\JobPostingController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::resource('/job_postings', JobPostingController::class); //if resource

//Route::get('job_posting', [JobPostingController::class], 'index']); if hindi resource