@extends('backend.master')
@section('content')

<div class="container">
    <div class="bg-info">
        <marquee behavior="scroll"scrollamount="12" direction="left"><h1>Deparment Add Form</h1></marquee>
    </div>
    <br>
    <a href="{{route('dptList.show')}}" class="btn btn-info">Back List</a>
    <br>
    
    <form action="{{ route('department.update',$departmentEdit->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-floating mt-5">
            <input type="text" name="department_name" value="{{ $departmentEdit->department_name}}" class="form-control" id="floating" placeholder="habijabi">
            <label for="floating" class=>Department Name :</label>
        </div>

        <div class="mt-5">
            <button class="btn btn-info" type="submit" value="submit">Department Update</button>
        </div>


    </form>


</div>




@endsection