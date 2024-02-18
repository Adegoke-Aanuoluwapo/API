@extends('layout')
@section('content')

<div class="card">
 <div class="card-header">Student Page </div>
 <div class="card-body">
  <form action="{{url('/student')}}" method="post">
   @csrf
  <label for="">Name</label><br>
  <input type="text" name="name" id="name" class="form-control"><br>
   <label for="">Guardian</label><br>
  <input type="text" name="guardian" id="name" class="form-control"><br>
   <label for="">Guardian Phone</label><br>
  <input type="text" name="phone" id="name" class="form-control"><br>
   <label for="">Address</label><br>
  <input type="text" name="address" id="address" class="form-control"><br>
   <label for="">Mobile</label><br>
  <input type="text" name="mobile" id="name" class="form-control"><br>
   <label for="">School</label><br>
  <input type="text" name="school" id="name" class="form-control"><br>
   <label for="">Department</label><br>
  <input type="text" name="department" id="name" class="form-control"><br>
   <label for="">Subject Taken</label><br>
  <textarea type="text" name="subtaken" id="name" class="form-control"></textarea>
   <label for="">Difficult Subject</label><br>
  <textarea type="text" name="diffsub" id="name" class="form-control"></textarea>
   <label for="">Interesting Subject</label><br>
  <textarea type="text" name="intresub" id="name" class="form-control"></textarea>
   <label for="">Intended School</label><br>
  <input type="text" name="intended_school" id="name" class="form-control"><br>
   <label for="">Jamb Combination</label><br>
  <textarea type="text" name="jamb_comb" id="name" class="form-control"></textarea>
  <input type="submit" value="Save">
  </form>
 </div>
</div>
@endsection