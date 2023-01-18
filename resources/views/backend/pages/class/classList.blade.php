@extends('backend.master')
@section('title', 'Class List Show')
@section('content')



<div class="container">

    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center text-danger">Class List Show</h1>
            @if(Session::has('danger'))
              <p class="alert alert-success">{{Session::get('danger')}}</p>
            @endif
            <br>
            <a class="btn btn-primary" href="{{url('class_form')}}">Go Form</a>
            <br></br>
            
            <table class="table table-bordered border-primary table-striped table-hover table-sm table-warning text-center">
                <thead>
                    <th><h4>SL</h4></th>
                    <th><h4>Class Name</h4></th>
                    <th><h4>Status</h4></th>
                    <th><h4>Description</h4></th>
                    <th><h4>Action</h4></th>

                </thead>
                <tbody>

                     @foreach($clists as $clists_view)
                    <tr>
                        <td class="bg-warning">{{ $clists_view->id }}</td>
                        <td class="bg-warning">{{ $clists_view->class_name }}</td>
                        <td class="bg-warning">{{ $clists_view->status }}</td>
                        <td class="bg-warning"> {{ $clists_view->description }}</td>
                        <td>
                            <a href="{{route('edit.class',$clists_view->id)}}" class="btn btn-success">Edit</a>
                            <a href="{{url('delete-class',$clists_view->id)}}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>


                    @endforeach
                   

                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection