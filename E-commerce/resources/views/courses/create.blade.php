@extends('layout')
@section('content')

<div class="card">
 <div class="card-header">Courses Page </div>
 <div class="card-body">
  <form action="{{url('/course/create')}}" method="post">
   @csrf
  <label for="">Name</label><br>
  <input type="text" name="name" id="name" class="form-control"><br>
   <label for="">Syllabus</label><br>
  <input type="text" name="syllabus" id="address" class="form-control"><br>
   <label for="">Duration</label><br>
  <input type="text" name="duration" id="name" class="form-control"><br>
  <input type="submit" value="Save">
  </form>
 </div>
</div>
@endsection