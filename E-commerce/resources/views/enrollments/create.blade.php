@extends('layout')
@section('content')

<div class="card">
 <div class="card-header">Enrollment Page </div>
 <div class="card-body">
  <form action="{{url('/enrollments/create')}}" method="post">
   @csrf
  <label for="">Enrol Number</label><br>
  <input type="text" name="enrol_no" id="name" class="form-control"><br>
   <label for="">Batch ID</label><br>
  <input type="tel" name="batch_id" id="address" class="form-control"><br>
   <label for="">Student ID</label><br>
 <select name="student_id" id="" class="form-control">
  @foreach( $student as $id => $name)
  <option value='{{$id}}'> {{$name}}</option>
  @endforeach
 </select>
   
   <label for="">Join Date</label><br>
  <input type="text" name="join_date" id="name" class="form-control"><br>
   <label for="">Fee</label><br>
  <input type="tel" name="fee" id="name" class="form-control"><br>
  <input type="submit" value="Save">
  </form>
 </div>
</div>
@endsection