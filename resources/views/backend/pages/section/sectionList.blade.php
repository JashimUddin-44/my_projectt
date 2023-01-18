@extends('backend.master')
@section('content')
<div class="container">
    <h1 class="text-center text-primary mt-4">Studens Section List Show</h1>
    <a href="section-form" class="btn btn-outline-primary">Back List</a>
    @if(Session::has('success'))
    <p class="alert alert-primary">{{Session::get('success')}}</p>
    @endif
    <table class="table table-bordered border-primary text-center mt-5 table-striped table-hover">
        <thead>
            <tr>
                <th>SL NO</th>
                <th>Section Name</th>
                <th>Students </th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($sections as $section)
            <tr>
                <td>{{$section->id}}</td>
                <td>{{$section->section_name}}</td>
                <td>{{$section->students}}</td>
                <td>
                    <a href="{{route('section.edit',$section->id)}}" class="btn btn-primary">Edit</a>
                    <a href="{{route('section.delete',$section->id)}}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection