@extends('backend.master')
@section('content')
<div class="container">

<div class="bg-primary text-white">
    <marquee behavior="scrollable" scrollamount="12" direction="left"><h1 class="text-center ">Institute Edit Form</h1></marquee>
</div> <br></br>
<a href="{{route('institute.list')}}" class="btn btn-primary">Back List</a>
    <form action="{{route('institute.update',$instituteEdit->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group mt-4 text-center ">
            <label for="name"><h1 class="mt-2 text-primary">Institute Name : </h1></label>
            <input type="text" name="institute_name" value="{{$instituteEdit->institute_name}}" class="form-control form-control-lg" placeholder="Type Your Institute Name">
            
        </div>

        <div class="form-group mt-4 text-center ">
            <label for="name"><h1 class="mt-2 text-primary">Institute Code : </h1></label>
            <input type="number" name="code" value="{{$instituteEdit->code}}" class="form-control form-control-lg" placeholder="Type Your Institute Code">
            
        </div>

        <div class="form-group mt-4 text-center ">
            <label for="name"><h1 class="mt-2 text-primary">Institute Address : </h1></label>
            <input type="text" name="address" value="{{$instituteEdit->address}}" class="form-control form-control-lg" placeholder="Type Your Institute Address">
            
        </div>
        
        <div class="form-group mt-4 text-center ">
            <label for="name"><h1 class="mt-2 text-primary">Institute Image :</h1></label>
            <input type="file" name="image" class="form-control form-control-lg" >
            <img src="{{asset('/upload/institute/'.$instituteEdit->image)}}" alt="" class="rounded-circle" height="80px" width="80px">
        </div>

        <div class="form-group mt-4 text-center ">
           <button type="submit" class="btn btn-primary">Update</button>
        </div>

        
    </form>
</div>
@endsection