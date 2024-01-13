@extends('layout')
@section('content')

<div class="card">
 <div class="card-header">Batch Application </div>
 <div class="card-body">
  <form action="{{url('/batches/create')}}" method="post">
   @csrf
  <label for="">Name</label><br>
  <input type="text" name="name" id="name" class="form-control"><br>
   <label for="">Course</label><br>
  {{-- <input type="number" name="course_id" id="address" class="form-control"><br> --}}
  <select name="course_id" id="" class="form-control">
   @foreach($courses as $course)
    <option value="{{$id}}">{{$name}}</option>
    @endforeach
  </select>
   <label for="">Start Date</label><br>
  <input type="text" name="start_date" id="name" class="form-control"><br>
  <input type="submit" value="Save">
  </form>
 </div>
</div>
@endsection