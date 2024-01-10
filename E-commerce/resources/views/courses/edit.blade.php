@extends('layout')
@section('content')

<div class="card">
 <div class="card-header">Edit Course</div>
 <div class="card-body">
  <form action="{{url('course/'. $course->id )}}" method="POST">
   {{ csrf_field() }}
   @method('PATCH')
  <label for="">Name</label><br>
  <input type="text" name="name" id="name" class="form-control" value="{{$course->name}}"><br>
   <label for="">Syllabus</label><br>
  <input type="text" name="syllabus" id="address" class="form-control" value="{{$course->syllabus}}"><br>
   <label for="">Duration</label><br>
  <input type="text" name="duration" id="name" class="form-control" value="{{$course->duration}}"><br>
  <input type="submit" value="Save">
  </form>
 </div>
</div>
@endsection