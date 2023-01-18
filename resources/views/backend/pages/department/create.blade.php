@extends('backend.master')
@section('content')

<div class="container">
    <div class="bg-info mt-5">
        <marquee behavior="scroll"scrollamount="12" direction="left"><h1>Deparment Add Form</h1></marquee>
    </div>
    <br>
    <a href="{{route('dptList.show')}}" class="btn btn-info">Back List</a>
    <form action="{{ route('department.store') }}" method="post">
        @csrf
        <div class="form-floating mt-5">
            <input type="text" name="department_name" class="form-control" id="floating" placeholder="habijabi">
            <label for="floating">Department Name :</label>
            <div>
                @error('department_name')
                  <strong class="text-danger">{{$message}}</strong>
                @enderror
            </div>
        </div>

        <div class="mt-5">
            <button class="btn btn-info" type="submit" value="submit">Department Save</button>
        </div>


    </form>


</div>




@endsection