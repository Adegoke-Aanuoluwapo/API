@extends('layout')

@section('content')

<div class="card">
  <div class="card-header">
  <h2>Batches</h2>
  </div>
  <div class="card-body">
    <div class="card-title">Name:{{$batch->name}}</div>
    <p class="card-text">Course :{{$batch->course->name}}</p>
    <p class="card-text">Start Date:{{$batch->start_date}}</p>
  </div>

</div>
@endsection