@extends('layout')
@section('content')

<div class="card">
 <div class="card-header"></div>
 <div class="card-body">
  <form action="{{url('/create')}}" method="post">
   @csrf
  <label for="">Name</label><br>
  <input type="text" name="name" id="name" class="form-control"><br>
   <label for="">Address</label><br>
  <input type="text" name="address" id="address" class="form-control"><br>
   <label for="">Mobile</label><br>
  <input type="text" name="mobile" id="name" class="form-control"><br>
  <input type="submit" value="Save">
  </form>
 </div>
</div>
@endsection