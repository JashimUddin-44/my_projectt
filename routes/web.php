<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\InstituteController;
use App\Http\Controllers\backend\ClassController;
use App\Http\Controllers\backend\DepartmentController;
use App\Http\Controllers\backend\SectionController;
use App\Http\Controllers\backend\StudentController;

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
Route::get('/institute-edit/{id}',[InstituteController::class,'edit'])->name('institute.edit');
Route::put('/institute-update/{id}',[InstituteController::class,'update'])->name('institute.update');
Route::get('/institute-delete/{id}',[InstituteController::class,'delete'])->name('institute.delete');


//ClassController

Route::get('/classList_view',[ClassController::class,'classList'])->name('class.show');       
Route::get('/class_form',[ClassController::class,'form']);       
Route::post('/class_store',[ClassController::class,'store'])->name('store.data');       
Route::get('/editer/{class_id}',[ClassController::class,'editer'])->name('edit.class');       
Route::put('/update-data/{id}',[ClassController::class,'updates']); 
Route::get('/delete-class/{id}',[ClassController::class,'destroy']);



//DepartmentController
Route::get('/department-form',[DepartmentController::class,'dpform']);     
Route::post('/department-store',[DepartmentController::class,'dpstore'])->name('department.store');     
Route::get('/departmentList-show',[DepartmentController::class,'dptList'])->name('dptList.show');     
Route::get('/department-edit/{id}',[DepartmentController::class,'dptedit']);     
Route::put('/department-update/{id}',[DepartmentController::class,'dptupdate'])->name('department.update');     
Route::get('/delete/{id}',[DepartmentController::class,'destroy'])->name('delete.department');




//SectionController
Route::get('/section-form',[SectionController::class,'create']); 
Route::post('section-store',[SectionController::class,'case'])->name('section.store');
Route::get('section_show',[SectionController::class,'show'])->name('section.show');
Route::get('section-edit/{id}',[SectionController::class,'edit'])->name('section.edit');
Route::put('section-update/{id}',[SectionController::class,'update'])->name('update.section');
Route::get('section-delete/{id}',[SectionController::class,'destroy'])->name('section.delete');




 //StudentController
 Route::get('/student-create',[StudentController::class,'create']);
 Route::post('/student_store',[StudentController::class,'store'])->name('student.store');
 Route::get('student_show',[StudentController::class,'show'])->name('view');
 Route::get('/student-edit/{student_id}',[StudentController::class,'edits'])->name('student.edit');
 Route::put('/student-update/{id}', [StudentController::class,'update'])->name('student.update');
 Route::get('student-delete/{id}',[StudentController::class,'destroy'])->name('student.delete');