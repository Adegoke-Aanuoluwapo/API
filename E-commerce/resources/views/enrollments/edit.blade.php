@extends('layout')
@section('content')

<div class="card">
 <div class="card-header"></div>
 <div class="card-body">
  <form action="{{url('enrollments/'. $enrollment->id)}}" method="POST">
   {{ csrf_field() }}
   @method('PATCH')
  <label for="">Enroll ID</label><br>
  <input type="text" name="enrol_no" id="name" class="form-control" value="{{$enrollment->enrol_no}}"><br>
   <label for="">Batch ID</label><br>
  <input type="text" name="batch_id" id="address" class="form-control" value="{{$enrollment->batch_id}}"><br>
  <label for="">Student ID</label><br>
  <input type="text" name="student_id" id="address" class="form-control" value="{{$enrollment->student_id}}"><br>
   <label for="">Join Date</label><br>
  <input type="text" name="join_date" id="name" class="form-control" value="{{$enrollment->join_date}}"><br>
  <label for="">Fee</label><br>
  <input type="text" name="fee" id="address" class="form-control" value="{{$enrollment->fee}}"><br>
  <input type="submit" value="Save">
  </form>
 </div>
</div>
@endsection