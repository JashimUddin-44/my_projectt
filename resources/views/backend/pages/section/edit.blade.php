@extends('backend.master')
@section('content')
<div class="container">
    <h1 class="text-center mt-3">Section Form</h1>
    @if(Session::has('success'))
    <p class="alert alert-primary">{{Session::get('success')}}</p>
    @endif
    <form action="{{route('update.section',$sectionEdit->id)}}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group mt-5">
            <label for="section_name">Section Name </label>
               <input type="text" name="section_name" value="{{$sectionEdit->section_name}}" class="form-control" id="section_name">
            <div>
                @error('section_name')
                <strong class="text-danger">{{$message}}</strong>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="studens">Student</label>
            <input type="number" name="students" value="{{$sectionEdit->students}}" class="form-control">
            <div>
                @error('students')
                <strong class="text-danger">{{$message}}</strong>
                @enderror
            </div>
        </div>
        <div class="form-group mt-4">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
</div>
@endsection