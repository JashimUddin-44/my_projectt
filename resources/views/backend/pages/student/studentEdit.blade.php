@extends('backend.master')
@section('title','Student create Form')
@section('content')

<div class="container">
        <div class="row">
           <div class="col-md-12">
            
            <div class="bg-primary">
             <marquee behavior="scroll" scrollamount="14" direction="left"><h1  class="text-center bg-primary p-2 text-white">Students information Add</h1></marquee>
            </div>
            <br>
             <a class="btn btn-success" href="{{route('view')}}">Back Show</a>

             
             @if(Session::has('msg'))
                <p class="alert alert-success">{{Session::get('msg')}}</p>
             @endif
             <br>
             <form action="{{route('student.update',$studentEdit->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="row">
                      <div class="col-md-12">
                        <div class="mb-3 ">
                          <label for="student_name" class="form-label"><h5>Student Name</h5> </label>
                          <input type="text" name="student_name" class="form-control" value="{{$studentEdit->student_name}}" id="student_name">
        
                        </div>
                        <div class="mb-4" id="service-select">
                          <label for="clist_id">Class Name</label>
                          <input type="text" name="clist_id" value="@if($studentEdit->students_class){{$studentEdit->students_class->class_name}}@endif" class="form-control" id="clist_id"> 
                        </div>
                        <div class="mb-3">
                          <label for="roll" class="form-label"><h5>Roll Number </h5></label>
                          <input type="number" name="roll" class="form-control" value="{{$studentEdit->roll}}" class="form-control" id="roll">
                          
                        </div>

                        <div class="mb-3">
                          <label for="registration" class="form-label"><h5>Registration Number</h5> </label>
                          <input type="number" name="registration" value="{{$studentEdit->registration}}" class="form-control" id="registration">
                          
                        </div>
                        <div class="mb-3" id="service-select">
                          <label for="dapartment_id" class="form-label"><h5>Department Name </h5></label>
                          <input type="text" name="department_id" value="@if($studentEdit->student_department){{$studentEdit->student_department->department_name}}@endif" class="form-control">
                          
                        </div>
                        <div class="mb-3">
                          <label for="section_id" class="form-label"><h5>Section Name </h5></label>
                         <input type="text" name="section_id" value="@if($studentEdit->student_section){{$studentEdit->student_section->section_name}}@endif" class="form-control">
                          
                        </div>
                        <div class="mb-3">
                          <label for="phone" class="form-label"><h5>Student Phone Number </h5></label>
                          <input type="number" name="phone" value="{{$studentEdit->phone}}" class="form-control" id="phone">
                          
                        </div>

                        <div class="mb-3">
                          <label for="email" class="form-label"><h5>Student Email Address </h5></label>
                          <input type="email" name="email" value="{{$studentEdit->email}}" class="form-control" id="email">
                          
                        </div>
                        <div class="mb-3">
                          <label for="father_name" class="form-label"><h5> Father name</h5> </label>
                          <input type="text" name="father_name" value="{{$studentEdit->father_name}}" class="form-control" id="father_name">
                          
                        </div>
                        <div class="mb-3">
                          <label for="mother_name" class="form-label"><h5> Mother name</h5> </label>
                          <input type="text" name="mother_name" value="{{$studentEdit->mother_name}}" class="form-control" id="mother_name">
                          
                        </div>
                        
                       
                        <div class="mb-3">
                          <label for="gender" class="form-label"><h5> Student Gender</h5> </label>
                          <input type="text" name="gender" value="{{$studentEdit->gender}}" class="form-control" id="gender">
                          
                        </div>
                       
                        <div class="mb-3">
                          <label for="profile_pic" class="form-label"><h5>Profile Picture</h5> </label>
                          <input type="file" name="profile_pic" value="" class="form-control" id="profile_pic">
                          <img src="{{asset ('upload/students/'.$studentEdit->profile_pic)}}" alt="Student Image" class="rounded-circle" height="80px" width="80px">
                         
                        </div>
                        

                      </div>
                      
                    <button type="submit" class="btn btn-primary" value="submit">Update</button>
                    </div>



 

                  </form>
                  <br>
            </div>
          </div>
    </div>


   
@endsection