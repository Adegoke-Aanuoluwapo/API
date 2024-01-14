@extends('layout')
@section('content')

<div class="card">
 <div class="card-header">Edit Payment</div>
 <div class="card-body">
  <form action="{{url('payments/'. $payment->id )}}" method="POST">
   {{ csrf_field() }}
   @method('PATCH')
  <label for="">Name</label><br>
  <select name="enrollment_id" id="name" class="form-control">
   @foreach($enrollments as $id =>$name)
   <option value="{{$id}}">{{$name}}</option>
   @endforeach
  </select>
  
   <label for="">Paid Date </label><br>
  <input type="text" name="paid_date" id="address" class="form-control" value="{{$payment->paid_date}}"><br>
   <label for="">Amount</label><br>
  <input type="text" name="amount" id="name" class="form-control" value="{{$payment->amount}}"><br>
  <input type="submit" value="Save">
  </form>
 </div>
</div>
@endsection