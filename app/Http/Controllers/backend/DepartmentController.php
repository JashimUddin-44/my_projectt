<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Department;
use Illuminate\Support\Facades\Validator;

class DepartmentController extends Controller
{
    public function dpform(){
        return view('backend.pages.department.create');
    }

    public function dpstore(Request $request){
        //dd($request->all());
        $validator=validator::make($request->all(),[
            'department_name' => 'required|max:255',

        ]);
        if($validator->fails()){
            return redirect(url('department-form'))->withErrors($validator)->withInput();
        }
        Department::create([
            'department_name' => $request->department_name,

        ]);
        
        return redirect()->route('dptList.show')->with('success','Department Created Succesfully');;
        
    }

    public function dptList(){
        $departments = Department::all();
        return view('backend.pages.department.departmentList',compact('departments'));
    }

    public function dptedit($id){
        $departmentEdit = Department::find($id);
        return view('backend.pages.department.dptedit',compact('departmentEdit'));
    }

    public function dptupdate(Request $request,$id){
        $dptupdate = Department::find($id);

        $dptupdate->update([
            'department_name'=> $request->department_name

        ]);
        return redirect()->route('dptList.show')->with('success','Department Updated Succesfully');
        
    }
    

    public function destroy($id){
        //dd($id);

        Department::find($id)->delete();

        return back()->with('danger','!Ooops Department Deleted !');

    }
}
