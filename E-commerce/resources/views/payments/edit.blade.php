@extends('layout')
@section('content')

<div class="card">
 <div class="card-header">Edit Batch</div>
 <div class="card-body">
  <form action="{{url('batches/'. $batch->id )}}" method="POST">
   {{ csrf_field() }}
   @method('PATCH')
  <label for="">Name</label><br>
  <input type="text" name="name" id="name" class="form-control" value="{{$batch->name}}"><br>
   <label for="">Course </label><br>
  <input type="text" name="course_id" id="address" class="form-control" value="{{$batch->course->name}}"><br>
   <label for="">Start Date</label><br>
  <input type="text" name="start_date" id="name" class="form-control" value="{{$batch->start_date}}"><br>
  <input type="submit" value="Save">
  </form>
 </div>
</div>
@endsection