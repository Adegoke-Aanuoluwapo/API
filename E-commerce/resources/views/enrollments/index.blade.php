@extends('layout')
@section('content')

        <div class="card">
          <div class="card-header">
          <h2>Laravel 10 Crud</h2>
          </div>
          <div class="card-body">
            <a href="{{url('/enrollments/create')}}" class="btn btn-success btn-sm" title="Add new Student"><i class="fa fa-plus" area-hidden="true">Enrollment Application</i></a>
            <br />
            <hr />
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                      <th>#</th>
                      <th> Enrol ID</th>
                      <th>Batch Id</th>
                      <th>Student Id</th>
                      <th>Join Date</th>
                      <td>Fee</td>
                  </tr>
                </thead>
                <tbody>
                    @foreach($enrollments as $enrollment)
                  <tr>
                      <td>{{$loop->iteration}}</td>
                      <td>{{$enrollment->enrol_no}}</td>
                      <td>{{$enrollment->batch->name}}</td>
                      <td>{{$enrollment->student->name}}</td>
                      <td>{{$enrollment->join_date}}</td>
                      <td>{{$enrollment->fee}}</td>

                      <td>
                    
                          <a href="{{url('enrollments/'. $enrollment->id)}}"  title="view enrollment"><button class="btn btn-sucess-sm">View</button></a>
                          <a href="{{url('enrollments/' .$enrollment->id. '/edit')}}"  title="edit " ><button class="btn btn-success">Edit</button></a>
                          <form action="{{url('enrollments/' . $enrollment->id)}}" accept-charset="utf-8" method="POST">
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
