@extends('layout')
@section('content')

<div class="card">
 <div class="card-header">Payment Application </div>
 <div class="card-body">
  <form action="{{url('/payments/create')}}" method="post">
   @csrf
      <label for="">Enrollment ID</label><br>
  {{-- <input type="number" name="course_id" id="address" class="form-control"><br> --}}
  <select name="enrollment_id" id="" class="form-control">
   @foreach($enrollments as $id => $name)
    <option value="{{$id}}">{{$name}}</option>
    @endforeach
  </select>
  <label for="">Paid Date</label><br>
  <input type="text" name="paid_date" id="name" class="form-control"><br>

   <label for="">Amount</label><br>
  <input type="text" name="amount" id="name" class="form-control"><br>
  <input type="submit" value="Save">
  </form>
 </div>
</div>
@endsection