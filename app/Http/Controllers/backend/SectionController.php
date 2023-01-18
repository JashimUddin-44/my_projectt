<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Section;

class SectionController extends Controller
{
   
    public function create(){
        return view('backend.pages.section.section_form');
    }

    public function case(Request $request){
       
        $validator = validator::make($request->all(),[
            'section_name' => 'required',
            'students' => 'required',
        ]);
        if($validator->fails()){
           return redirect(url('section-form'))->withErrors($validator)->withInput();
        }
        

        Section::create([
            'section_name' =>$request->section_name,
            'students' =>$request->students
        ]);
        return to_route('section.show')->with('success','Section Entry Successfully');
    }

     public function show(){
        $sections = Section::all();
        return view('backend.pages.section.sectionList',compact('sections'));
    }

    public function edit($id){
        $sectionEdit = Section::find($id);
        return view('backend.pages.section.edit',compact('sectionEdit'));
    }

    public function update(Request $request ,$id){
        $updateData = Section::find($id);

        $updateData->update([
            'section_name' =>$request->section_name,
            'students' =>$request->students
        ]);
        return to_route('section.show')->with('success','Section Entry Successfully');
    }

    public function destroy($id){
        Section::find($id)->delete();
        return back();
    }
}
