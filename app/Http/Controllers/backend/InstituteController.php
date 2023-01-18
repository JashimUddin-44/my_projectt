<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Institute;
use Illuminate\Support\Facades\File;

class InstituteController extends Controller
{
    

    public function form(){
        return view('backend.pages.institute.form');
    }
    
    public function store(Request $request){
        $request->validate([
            'institute_name' => 'required',
            'code' => 'required',
            'address' => 'required',
            'image' => 'required',
        ]);

        $fileName= null;
        if($request->hasfile('image')){
        $fileName = "school".'.'.date('Ymdhmsis').'.'.$request->file('image')->getClientOriginalExtension();
        $request->file('image')->storeAs('/upload/institute',$fileName);
        }

        Institute::create([
            'institute_name' =>$request->institute_name,
            'code' =>$request->code,
            'address' =>$request->address,
            'image' => $fileName,
        ]);
        return to_route('institute.list')->with('success','Institute Created Successfully');
        
    }

    public function list(){
        $institute = Institute::all();
        return view('backend.pages.institute.list',compact('institute'));
    }

    public function edit($id){
        $instituteEdit = Institute::find($id);
        return view('backend.pages.institute.edit',compact('instituteEdit'));
    }

    public function update(Request $request,$id){
        $updateData = Institute::find($id);
        $fileName= $updateData->image;
        if($request->hasfile('image')){
            $removeFile=public_path().'/uploal/institute/'.$fileName;
            File::delete($removeFile);
        $fileName = "school".'.'.date('Ymdhmsis').'.'.$request->file('image')->getClientOriginalExtension();
        $request->file('image')->storeAs('/upload/institute',$fileName);
        }

        $updateData->update([
            'institute_name' =>$request->institute_name,
            'code' =>$request->code,
            'address' =>$request->address,
            'image' => $fileName,
        ]);
        return to_route('institute.list')->with('success','Institute Updated Successfully');
    }

    public function delete($id){
        $instituteDelete = Institute::find($id);

        $fileName = $instituteDelete->image;
            $removeFile = public_path().'/upload/institute/'.$fileName;
            File::delete($removeFile);

            $instituteDelete->delete();
            
            return back()->with('success','Institute Updated Successfully');
        
    }
}
