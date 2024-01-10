@extends('layout')

@section('content')

<div class="card">
  <div class="card-header">
  <h2>Teacher</h2>
  </div>
  <div class="card-body">
    <div class="card-title">Name:{{$teacher->name}}</div>
    <p class="card-text">Address:{{$teacher->address}}</p>
    <p class="card-text">Mobile:{{$teacher->mobile}}</p>
  </div>

</div>
@endsection