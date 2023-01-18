@extends('backend.master')
@section('content')
<div class="container">
    <h1 class="text-center mt-3">Section Form</h1>
    @if(Session::has('success'))
    <p class="alert alert-primary">{{Session::get('success')}}</p>
    @endif
    <form action="{{route('section.store')}}" method="post">
        @csrf
        <div class="form-group mt-5">
            <label for="section_name">Section Name </label>
            <select class="form-control form-select" name="section_name" id="section_name">
                <option value="">Selected</option>
                <option>Shapla</option>
                <option>Jova</option>
                <option>Golap</option>
            </select>
            <div>
                @error('section_name')
                <strong class="text-danger">{{$message}}</strong>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="studens">Student</label>
            <input type="number" name="students" class="form-control">
            <div>
                @error('students')
                <strong class="text-danger">{{$message}}</strong>
                @enderror
            </div>
        </div>
        <div class="form-group mt-4">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>
</div>
@endsection