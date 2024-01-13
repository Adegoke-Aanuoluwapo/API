@extends('layout')

@section('content')

<div class="card">
  <div class="card-header">
  <h2>Course</h2>
  </div>
  <div class="card-body">
    <div class="card-title">Name:{{$course->name}}</div>
    <p class="card-text">Syllabus:{{$course->syllabus}}</p>
    <p class="card-text">Duration:{{$course->duration()}}</p>
  </div>

</div>
@endsection