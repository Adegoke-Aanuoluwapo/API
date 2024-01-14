@extends('layout')

@section('content')

<div class="card">
  <div class="card-header">
  <h2>Batches</h2>
  </div>
  <div class="card-body">
    <div class="card-title">Enrollment ID:{{$payment->enrollment->enrol_no}}</div>
    <p class="card-text">Payment Date :{{$payment->piaid_date}}</p>
    <p class="card-text">Amount:{{$payment->amount}}</p>
  </div>

</div>
@endsection