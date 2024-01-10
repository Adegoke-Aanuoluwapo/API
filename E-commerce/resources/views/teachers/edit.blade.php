@extends('layout')
@section('content')

<div class="card">
 <div class="card-header">Edit Teacher</div>
 <div class="card-body">
  <form action="{{url('teacher/'. $teacher->id )}}" method="POST">
   {{ csrf_field() }}
   @method('PATCH')
  <label for="">Name</label><br>
  <input type="text" name="name" id="name" class="form-control" value="{{$teacher->name}}"><br>
   <label for="">Address</label><br>
  <input type="text" name="address" id="address" class="form-control" value="{{$teacher->address}}"><br>
   <label for="">Mobile</label><br>
  <input type="text" name="mobile" id="name" class="form-control" value="{{$teacher->mobile}}"><br>
  <input type="submit" value="Save">
  </form>
 </div>
</div>
@endsection