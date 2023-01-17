@extends('backend.master')
@section('content')
<div class="container">

<div class="bg-primary text-white">
    <marquee behavior="scrollable" scrollamount="12" direction="left"><h1 class="text-center ">Institute Create Form</h1></marquee>
</div> <br></br>
<a href="{{route('institute.list')}}" class="btn btn-primary">Back List</a>
    <form action="{{route('institute.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group mt-4 text-center ">
            <label for="name"><h1 class="mt-2 text-primary">Institute Name : </h1></label>
            <input type="text" name="institute_name" class="form-control form-control-lg" placeholder="Type Your Institute Name">
            <div>
                @error('institute_name')
                <strong class="text-danger">{{$message}}</strong>
                @enderror
            </div>
        </div>

        <div class="form-group mt-4 text-center ">
            <label for="name"><h1 class="mt-2 text-primary">Institute Code : </h1></label>
            <input type="number" name="code" class="form-control form-control-lg" placeholder="Type Your Institute Code">
            <div>
                @error('code')
                <strong class="text-danger">{{$message}}</strong>
                @enderror
            </div>
        </div>

        <div class="form-group mt-4 text-center ">
            <label for="name"><h1 class="mt-2 text-primary">Institute Address : </h1></label>
            <input type="text" name="address" class="form-control form-control-lg" placeholder="Type Your Institute Address">
            <div>
                @error('address')
                <strong class="text-danger">{{$message}}</strong>
                @enderror
            </div>
        </div>
        
        <div class="form-group mt-4 text-center ">
            <label for="name"><h1 class="mt-2 text-primary">Institute Image :</h1></label>
            <input type="file" name="image" class="form-control form-control-lg" >
            <div>
                @error('image')
                <strong class="text-danger">{{$message}}</strong>
                @enderror
            </div>
        </div>

        <div class="form-group mt-4 text-center ">
           <button type="submit" class="btn btn-primary">Submit</button>
        </div>

        
    </form>
</div>
@endsection