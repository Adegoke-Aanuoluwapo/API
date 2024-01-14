@extends('layout')
@section('content')

        <div class="card">
          <div class="card-header">
          <h2>Laravel 10 Crud</h2>
          </div>
          <div class="card-body">
            <a href="{{url('/payments/create')}}" class="btn btn-success btn-sm" title="Add new Student"><i class="fa fa-plus" area-hidden="true">Batch Registration</i></a>
            <br />
            <hr />
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                      <th>s/n</th>
                      <th> Name</th>
                      <th>Course</th>
                      <th>Start Date</th>
                      <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                 @foreach($payments as $payment)
                  <tr>

                      <td>{{$loop->iteration}}</td>
                      <td>{{$payment->name}}</td>
                      <td>{{$payment->course->name}}</td>
                      <td>{{$payment->start_date}}</td>

                      <td>
                    
                          <a href="{{url('payments/'. $payment->id)}}"  title="view payments"><button class="btn btn-sucess-sm">View</button></a>
                          <a href="{{url('payments/' .$payment->id. '/edit')}}"  title="edit " ><button class="btn btn-success">Edit</button></a>
                          <form action="{{url('payments/' . $payment->id)}}" accept-charset="utf-8" method="POST">
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
