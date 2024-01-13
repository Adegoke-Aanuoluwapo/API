@extends('layout')

@section('content')

<div class="card">
  <div class="card-header">
  <h2>Enrollment</h2>
  </div>
  <div class="card-body">
    <div class="card-title">Enrol ID:{{$enrollment->enrol_no}}</div>
    <p class="card-text">Batch ID:{{$enrollment->batch_id}}</p>
    <p class="card-text">Student ID:{{$enrollment->student_id}}</p>
      <p class="card-text">Student ID:{{$enrollment->join_date}}</p>
        <p class="card-text">Student ID:{{$enrollment->fee}}</p>
  </div>

</div>
@endsection