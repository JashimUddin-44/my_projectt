<?php

namespace App\Http\Controllers\backend;
use App\Models\Student;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Clist;
use App\Models\Department;
use App\Models\Section;
use Illuminate\Support\Facades\File;


class StudentController extends Controller
{

    public function create(){
        $clases = Clist::get();
        $departments = Department::get();
        $sections = Section::all();
        return view('backend.pages.student.create',compact('clases','departments','sections'));
    }

    public function show(){
        $studentData = Student::with('students_class')->paginate(5);
        return view('backend.pages.student.student_view',compact('studentData'));
    }

    public function store(Request $request){
        $request->validate([
            'student_name' => 'required',
            'clist_id' => 'required',
            'roll' => 'required',
            'registration' => 'required',
            'department_id' => 'required',
            'section_id' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'father_name' => 'required',
            'mother_name' => 'required',
            'gender' => 'required',
            'profile_pic' => 'required',
        ]);

        $students = new student();
        $students->student_name = $request->student_name;
        $students->clist_id = $request->clist_id;
        $students->roll = $request->roll;
        $students->registration = $request->registration;
        $students->department_id = $request->department_id;
        $students->section_id = $request->section_id;
        $students->phone = $request->phone;
        $students->email = $request->email;
        $students->father_name = $request->father_name;
        $students->mother_name = $request->mother_name;
        $students->gender = $request->gender;

        if($request->hasfile('profile_pic')){
            $file = $request->file('profile_pic');
            $extenstion = $file->getClientOriginalExtension();
            $fileName = 'jashim'.'.'.date('Ymdhmsis').'.'.$extenstion;
            $file->move('upload/students/',$fileName);
            $students->profile_pic= $fileName;
        }
        $students->save();
        return to_route('view')->with('success','Student Added Successfully');
    }

    public function edits($student_id){
        $studentEdit = Student::find($student_id);
        return view('backend.pages.student.studentEdit',compact('studentEdit'));
    }

    public function update(Request $request ,$id){
       $updateData = Student::find($id);
       $updateData->student_name = $request->student_name;
       $updateData->clist_id = $request->clist_id;
       $updateData->roll = $request->roll;
       $updateData->registration = $request->registration;
       $updateData->department_id = $request->department_id;
       $updateData->section_id = $request->section_id;
       $updateData->phone = $request->phone;
       $updateData->email = $request->email;
       $updateData->father_name = $request->father_name;
       $updateData->mother_name = $request->mother_name;
       $updateData->gender = $request->gender;

       if($request->hasfile('profile_pic')){

        $destination='upload/students/'.$updateData->profile_pic;

            if(File::exists($destination)){
                File::delete($destination);
            }

           $file = $request->file('profile_pic');
           $extenstion = $file->getClientOriginalExtension();
           $fileName = 'jashim'.'.'.date('Ymdhmsis').'.'.$extenstion;
           $file->move('upload/students/',$fileName);
           $updateData->profile_pic= $fileName;
       }
       $updateData->save();
       return to_route('view')->with('success','Student Updated Successfully');
    }

    public function destroy($id){
        Student::find($id)->delete();
        return back()->with('success','Student Deleted Successfully');
    }
    
}
