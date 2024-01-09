@extends('layout')
@section('content')

        <div class="card">
          <div class="card-header">
          <h2>Laravel 10 Crud</h2>
          </div>
          <div class="card-body">
            <a href="{{url('/create')}}" class="btn btn-success btn-sm" title="Add new Student"><i class="fa fa-plus" area-hidden="true">Student Application</i></a>
            <br />
            <hr />
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                      <th>#</th>
                      <th> Name</th>
                      <th>Address</th>
                      <th>Mobile</th>
                      <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($students as $student)
                  <tr>

                      <td>{{$student->id}}</td>
                      <td>{{$student->name}}</td>
                      <td>{{$student->address}}</td>
                      <td>{{$student->mobile}}</td>

                      <td>
                    
                          <a href="{{url('show_student/'. $student->id)}}"  title="view student"><button class="btn btn-sucess-sm">View</button></a>
                          <a href="{{url('student/' .$student->id)}}"  title="Delete " ><button class="btn btn-success">Delete</button></a>
                          <form action="{{url('student/' .$student->id)}}" accept-charset="utf-8">
                            <button class="btn btn-danger btn-sm" onclick="reset">Edit
                            </button>
                          </form>
                      </td>
                       
                  </tr>
                   @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
@endsection
