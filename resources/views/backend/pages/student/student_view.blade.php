@extends('backend.master')
@section('title','Student List Show')
@section('content')
    
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card-header"><h1 class="text-center text-primary">Students List</h1></div>
                <a class="btn btn-success" href="{{url('student-create')}}">Create Form</a>
                <br><br>
                 @if(Session::has('success'))
                 <p class="alert alert-danger">{{Session::get('success')}}</p>
                 @endif 
           
                <table class="table table-bordered border-primary table-striped table-hover table-sm text-center table-info">
                    <thead class="thead-dark">
                      <tr>
                        <th class="bg-info text-dark">SL</th>
                        <th class="bg-info text-dark">Student Name</th>
                        <th class="bg-info text-dark">Class Name</th>
                        <th class="bg-info text-dark">Roll</th>
                        <th class="bg-info text-dark">Registration</th>
                        <th class="bg-info text-dark">Department</th>
                        <th class="bg-info text-dark">Section</th>
                        <th class="bg-info text-dark">Mobaile Number</th>
                        <th class="bg-info text-dark">Email</th>
                        <th class="bg-info text-dark">Father Name</th>
                        <th class="bg-info text-dark">Mother Name</th>
                        <th class="bg-info text-dark">Gender</th>                      
                        <th class="bg-info text-dark">Image</th>
                        <th class="bg-info text-dark">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      
                     @foreach($studentData as $student)
                  
                        <tr>
                          <th class="bg-info">{{$student->id}}</th>
                          <td class="bg-info">{{$student->student_name}}</td>
                          <td class="bg-info">@if($student->students_class){{$student->students_class->class_name}}@endif</td>
                          <td class="bg-info">{{$student->roll}}</td>
                          <td class="bg-info">{{$student->registration}}</td>
                          <td class="bg-info">@if($student->student_department){{$student->student_department->department_name}}@endif</td>
                          <td class="bg-info">@if($student->student_section){{$student->student_section->section_name}}@endif</td>
                          <td class="bg-info">{{$student->phone}}</td>
                          <td class="bg-info">{{$student->email}}</td>
                          <td class="bg-info">{{$student->father_name}}</td>
                          <td class="bg-info">{{$student->mother_name}}</td>
                          <td class="bg-info">{{$student->gender}}</td>
                          <td class="bg-info"><img src="{{asset ('upload/students/'.$student->profile_pic)}}" alt="Student Image" class="rounded-circle" height="80px" width="80px"></td>
                          <td>
                            <a href="{{route('student.edit',$student->id)}}" class="btn btn-primary">edit</a>
                            <a href="{{route('student.delete',$student->id)}}" class="btn btn-danger">delete</a>
                          </td>
                        </tr>
                       @endforeach 
                        
                       
                    
                    </tbody>
                  </table>
                  
                  <div class="d-flex justify-content-center">
                    {{$studentData->links()}}
                  </div>
                  
            </div>
        </div>
    </div>
    
    
   
    

@endsection