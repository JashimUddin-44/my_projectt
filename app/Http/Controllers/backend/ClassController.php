<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Clist;

class ClassController extends Controller
{
    
    public function form(){
        return view('backend.pages.class.create');
    }
    public function store(Request $request){
        //dd($request->all());
        $validator=validator::make($request->all(),[
            'class_name' => 'required|max:255',
            'status' => 'required|max:255',
            'description' => 'required|max:255',

        ]);
        if($validator->fails()){
            return redirect(url('/class_form'))->withErrors($validator)->withInput();
        }

        //insert code

        $clists= new Clist(); 
        $clists->class_name = $request->class_name;
        $clists->status = $request->status;
        $clists->description = $request->description;
        $clists->save();
        session()->flash('danger','Class Information Added Successfully');
        return redirect()->route('class.show');

    }

    public function classList(){
        $clists= Clist::all();
        return view('backend.pages.class.classList',compact('clists'));
    }

    public function editer($class_id){
        $clistEdit= Clist::find($class_id);
        return view('backend.pages.class.cledit',compact('clistEdit'));
    }

    public function updates(Request $request, $id ){
        //dd($request->all());
        $validator=validator::make($request->all(),[
            'class_name' => 'required|max:255',
            'status' => 'required|max:255',
            'description' => 'required|max:255',

        ]);
        if($validator->fails()){
            return redirect(url('/class_form'))->withErrors($validator)->withInput();
        }

        //Update code

        $updateclass= Clist::find($id); 
        $updateclass->class_name = $request->class_name;
        $updateclass->status = $request->status;
        $updateclass->description = $request->description;
        $updateclass->save();
        session()->flash('msg','Class Information Updated Successfully');
        return redirect()->back();

    }
    public function destroy($id){
        Clist::destroy($id);
        return back()->with('danger','!Ooops Department Deleted !');
    }


}
