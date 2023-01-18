@extends('backend.master')
@section('content')
<div class="container">
    <h1 class="text-center text-primary mt-5">Institute Table</h1>
    
    <a href="{{route('institute.form')}}" class="btn btn-primary">Back Form</a>
    <br></br>
    @if(Session::has('success'))
    <p class="alert alert-success">{{Session::get('success')}}</p>
    @endif

    <table class="table table-bordered border-primary mt-5 table-hover table-striped">
        <thead>
            <tr>
                <th>Institute Name</th>
                <th>Institute Code</th>
                <th>Address</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($institute as $data)
            <tr>
                <td>{{$data->institute_name}}</td>
                <td>{{$data->code}}</td>
                <td>{{$data->address}}</td>
                <td><img src="{{asset('/upload/institute/'.$data->image)}}" alt="Institute" height="80px" width="80px"></td>
                <td>
                <a href="{{route('institute.edit',$data->id)}}" class="btn btn-primary">Edit</a>
                    <a href="{{route('institute.delete',$data->id)}}" class="btn btn-danger">Delete</a>
                </td>
                    

            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection