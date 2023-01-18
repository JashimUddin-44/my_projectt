@extends('backend.master')
@section('content')
<div class="container">
    <div class="bg-primary text-center text-white mt-5 mb-5">
        <h1>Collection Of Department List</h1>
    </div>
    <a href="{{url('department-form')}}" class="btn btn-info">Back Form</a>
    <br></br>
    @if(Session::has('success'))
        <p class="alert alert-success">{{Session::get('success')}}</p>
    @endif

    @if(Session::has('danger'))
        <p class="alert alert-success">{{Session::get('danger')}}</p>
    @endif
    
    <table class="table table-bordered border-danger table-hover table-striped text-center table-primary table-sm">
        <thead>
            <tr>
                <th class="bg-primary">SL NO</th>
                <th class="bg-primary">Department Name</th>
                <th>Action</th>
               
            </tr>
        </thead>
        <tbody>
            @foreach($departments as $department)
            <tr>
                <td class="bg-primary">{{$department->id }}</td>
                <td class="bg-primary">{{ $department->department_name }}</td>
                <td>
                    <a href="{{url('department-edit',$department->id)}} " class="btn btn-primary">Edit</a>
                    <a href="{{route('delete.department',$department->id)}} " class="btn btn-danger">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>


@endsection