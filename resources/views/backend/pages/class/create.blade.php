@extends('backend.master')
@section('title', 'Class List Show')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
        <div class="bg-primary">
             <marquee behavior="scroll" scrollamount="14" direction="left"><h1  class="text-center bg-primary p-2 text-white">Class information Add</h1></marquee>
        </div>
            <br>
            @if(Session::has('msg'))
             <p class="alert alert-primary">{{Session::get('msg')}}</p>
            @endif
             <a class="btn btn-success" href="{{url('classList_view')}}">Back Show</a>
            <form action="{{route('store.data')}}" method="post">
                @csrf

                <div class="row">
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label for="class_name" class="form-label">Class Name</label>
                            <input type="text" name="class_name" class="form-control" id="class_name" placeholder="Enter Your Class Name">
                            @error('class_name')
                            <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="class_name" class="form-label">Class Status</label>
                            <input type="text" name="status" class="form-control" id="class_name" placeholder="Enter Your Class status">
                            @error('status')
                            <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="class_name" class="form-label">Class Description</label>
                            <input type="text" name="description" class="form-control" id="class_name" placeholder="Enter Your Class description">
                            @error('description')
                            <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div>
                        
                        
                    </div>

                    <button type="submit" class="btn btn-primary" value="submit">Submit</button>


                </div>
            </form>
        </div>
    </div>
</div>

@endsection