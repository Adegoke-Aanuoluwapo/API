@extends('layout')

@section('content')

<div class="card">
  <div class="card-header">
  <h2>Student</h2>
  </div>
  <div class="card-body">
    <div class="card-title">Name:{{$student->name}}</div>
    <p class="card-text">Address:{{$student->address}}</p>
    <p class="card-text">Mobile:{{$student->mobile}}</p>
  </div>

</div>
@endsection