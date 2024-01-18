@extends('layout')
@section('content')

        <div class="card">
          <div class="card-header">
          <h2>Laravel 10 Crud</h2>
          </div>
          <div class="card-body">
            <a href="{{url('/teacher/create')}}" class="btn btn-success btn-sm" title="Add new Student"><i class="fa fa-plus" area-hidden="true">Teacher Application</i></a>
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
                 @foreach($teachers as $teacher)
                  <tr>

                      <td>{{$loop->iteration}}</td>
                      <td>{{$teacher->name}}</td>
                      <td>{{$teacher->address}}</td>
                      <td>{{$teacher->mobile}}</td>

                      <td>
                    
                          <a href="{{url('teacher/'. $teacher->id)}}"  title="view teacher"><button class="btn btn-sucess-sm">View</button></a>
                          <a href="{{url('teacher/' .$teacher->id. '/edit')}}"  title="edit " ><button class="btn btn-success">Edit</button></a>
                          <form action="{{url('teacher/' . $teacher->id)}}" accept-charset="utf-8" method="POST">
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
              {{$teachers->links()}}
            </div>
          </div>
        </div>
@endsection
