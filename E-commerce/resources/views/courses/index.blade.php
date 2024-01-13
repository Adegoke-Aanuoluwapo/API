@extends('layout')
@section('content')

        <div class="card">
          <div class="card-header">
          <h2>Laravel 10 Crud</h2>
          </div>
          <div class="card-body">
            <a href="{{url('/course/create')}}" class="btn btn-success btn-sm" title="Add new Student"><i class="fa fa-plus" area-hidden="true">Course Registration</i></a>
            <br />
            <hr />
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                      <th>s/n</th>
                      <th> Name</th>
                      <th>Syllabus</th>
                      <th>Duration</th>
                      <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                 @foreach($courses as $course)
                  <tr>

                      <td>{{$loop->iteration}}</td>
                      <td>{{$course->name}}</td>
                      <td>{{$course->syllabus}}</td>
                      <td>{{$course->duration()}}</td>

                      <td>
                    
                          <a href="{{url('course/'. $course->id)}}"  title="view course"><button class="btn btn-sucess-sm">View</button></a>
                          <a href="{{url('course/' .$course->id. '/edit')}}"  title="edit " ><button class="btn btn-success">Edit</button></a>
                          <form action="{{url('course/' . $course->id)}}" accept-charset="utf-8" method="POST">
                            {{method_field('DELETE')}}
                            {{csrf_field()}}
                            <button type="submit" class="btn btn-danger btn-sm" >Delete
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
