<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\InstituteController;

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
      //DashboardController
Route::get('/admin-page',[DashboardController::class,'master'])->name('dashboard');


          //InstituteController
Route::get('/instituteList-page',[InstituteController::class,'list'])->name('institute.list');
Route::get('/institute-form',[InstituteController::class,'form'])->name('institute.form');
Route::post('/institute-store',[InstituteController::class,'store'])->name('institute.store');
