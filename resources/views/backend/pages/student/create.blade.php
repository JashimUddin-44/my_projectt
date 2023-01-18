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
             <a class="btn btn-success" href="">Back Show</a>

             
             @if(Session::has('msg'))
                <p class="alert alert-success">{{Session::get('msg')}}</p>
             @endif
             <br>
             <form action="{{route('student.store')}}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                      <div class="col-md-12">
                        <div class="mb-3 ">
                          <label for="student_name" class="form-label"><h5>Student Name</h5> </label>
                          <input type="text" name="student_name" class="form-control" value="{{ old('student_name'); }}" id="student_name" placeholder="Type Student Name">
                          <div>
                          @error('student_name')
                              <strong class="text-danger">{{ $message }}</strong>
                          @enderror
                          </div>
                        </div>
                        <div class="mb-4" id="service-select">
                          <label for="clist_id">Class Name</label>
                          <select name="clist_id" class=" form-select form-control" id="clist_id">
                            <option value="">select your class</option>
                            @foreach($clases as $class)
                            <option value="{{$class->id}}">{{$class->class_name}}</option>
                            @endforeach
                          </select>
                          <div>
                            @error('clist_id')
                            <strong class="text-danger">{{$message}}</strong>
                            @enderror
                          </div>
                        </div>
                        <div class="mb-3">
                          <label for="roll" class="form-label"><h5>Roll Number </h5></label>
                          <input type="number" name="roll" class="form-control" value="{{ old('roll'); }}" class="form-control" id="roll" placeholder="Type Your Roll">
                          <div>
                          @error('roll')
                              <strong class="text-danger">{{ $message }}</strong>
                          @enderror
                          </div>
                        </div>

                        <div class="mb-3">
                          <label for="registration" class="form-label"><h5>Registration Number</h5> </label>
                          <input type="number" name="registration" value="{{ old('registration'); }}" class="form-control" id="registration" placeholder="Type Your Registration">
                          <div>
                          @error('registration')
                              <strong class="text-danger">{{ $message }}</strong>
                          @enderror
                          </div>
                        </div>
                        <div class="mb-3" id="service-select">
                          <label for="dapartment_id" class="form-label"><h5>Department Name </h5></label>
                          <select name="department_id" class="form-control form-select" id="department_id">
                            <option value="">select department</option>
                            @foreach($departments as $department)
                            <option value="{{$department->id}}">{{$department->department_name}}</option>
                            @endforeach
                          </select>
                          <div>
                            @error('department_id')
                            <strong class="text-danger">{{$message}}</strong>
                            @enderror
                          </div>
                        </div>
                        <div class="mb-3">
                          <label for="section_id" class="form-label"><h5>Section Name </h5></label>
                          <select name="section_id" class="form-control form-select" id="">
                            <option value="">select section</option>
                            @foreach($sections as $section)
                            <option value="{{$section->id}}">{{$section->section_name}}</option>
                            @endforeach
                          </select>
                          <div>
                            @error('section_id')
                            <strong class="text-danger">{{$message}}</strong>
                            @enderror
                          </div>
                        </div>
                        <div class="mb-3">
                          <label for="phone" class="form-label"><h5>Student Phone Number </h5></label>
                          <input type="number" name="phone" value="{{ old('phone'); }}" class="form-control" id="phone" placeholder="+880-">
                          <div>
                          @error('phone')
                              <strong class="text-danger">{{ $message }}</strong>
                          @enderror
                          </div>
                        </div>

                        <div class="mb-3">
                          <label for="email" class="form-label"><h5>Student Email Address </h5></label>
                          <input type="email" name="email" value="{{ old('email'); }}" class="form-control" id="email" placeholder="Type Your Email">
                          <div>
                          @error('email')
                              <strong class="text-danger">{{ $message }}</strong>
                          @enderror
                          </div>
                        </div>
                        <div class="mb-3">
                          <label for="father_name" class="form-label"><h5> Father name</h5> </label>
                          <input type="text" name="father_name" value="{{ old('father_name'); }}" class="form-control" id="father_name" placeholder="Type Your Father Name">
                          <div>
                          @error('father_name')
                              <strong class="text-danger">{{ $message }}</strong>
                          @enderror
                          </div>
                        </div>
                        <div class="mb-3">
                          <label for="mother_name" class="form-label"><h5> Mother name</h5> </label>
                          <input type="text" name="mother_name" value="{{ old('mother_name'); }}" class="form-control" id="mother_name" placeholder="Type Your Mother Name">
                          <div>
                          @error('mother_name')
                              <strong class="text-danger">{{ $message }}</strong>
                          @enderror
                          </div>
                        </div>
                        
                       
                        <div class="mb-3">
                          <label for="gender" class="form-label"><h5> Student Gender</h5> </label>
                          <input type="text" name="gender" value="{{ old('gender'); }}" class="form-control" id="gender" placeholder="Type Your Gender">
                          <div>
                          @error('gender')
                              <strong class="text-danger">{{ $message }}</strong>
                          @enderror
                          </div>
                        </div>
                       
                        <div class="mb-3">
                          <label for="profile_pic" class="form-label"><h5>Profile Picture</h5> </label>
                          <input type="file" name="profile_pic" value="{{ old('profile_pic'); }}" class="form-control" id="profile_pic">
                          <div>
                          @error('profile_pic')
                              <strong class="text-danger">{{ $message }}</strong>
                          @enderror
                          </div>
                        </div>
                        

                      </div>
                      
                    <button type="submit" class="btn btn-primary" value="submit">Submit</button>
                    </div>



 

                  </form>
                  <br>
            </div>
          </div>
    </div>


   
@endsection