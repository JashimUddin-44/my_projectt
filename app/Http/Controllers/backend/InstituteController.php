<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Institute;

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
        return redirect()->back();
        
    }

    public function list(){
        $institute = Institute::all();
        return view('backend.pages.institute.list',compact('institute'));
    }
}
