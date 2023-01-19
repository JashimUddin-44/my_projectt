<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function studentget(){
        $students = Student::find(1)->only('student_name','roll');
        return response()->json([
            'Success'=> true,
            'message'=>'all students showing',
            'data'=>$students
        ]);
    }
}
