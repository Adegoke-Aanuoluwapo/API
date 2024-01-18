@extends('layout')
@section('content')

        <div class="card">
          <div class="card-header">
          <h2>Laravel 10 Crud</h2>
          </div>
          <div class="card-body">
            <a href="{{url('/payments/create')}}" class="btn btn-success btn-sm" title="Add new Student"><i class="fa fa-plus" area-hidden="true">Payment Registration</i></a>
            <br />
            <hr />
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                      <th>s/n</th>
                      <th> Enrollment ID</th>
                      <th>Paid Date</th>
                      <th>Amount</th>
                      <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                 @foreach($payments as $payment)
                  <tr>

                      <td>{{$loop->iteration}}</td>
                      <td>{{$payment->enrollment->enrol_no}}</td>
                      <td>{{$payment->paid_date}}</td>
                      <td>{{$payment->amount}}</td>

                      <td>
                    
                          <a href="{{url('payments/'. $payment->id)}}"  title="view payments"><button class="btn btn-sucess-sm">View</button></a>
                          <a href="{{url('payments/' .$payment->id. '/edit')}}"  title="edit " ><button class="btn btn-success">Edit</button></a>
                          <form action="{{url('payments/' . $payment->id)}}" accept-charset="utf-8" method="POST">
                            {{method_field('DELETE')}}
                            {{csrf_field()}}
                            <button type="submit" class="btn btn-danger btn-sm" >Delete
                            </button>
                          </form>
                          <a href="{{url('/report/report1/'. $payment->id)}}" title="Print Payment"><button type="submit" class="btn btn-primary" >Print </button></a>
                      </td>
                       
                  </tr>
                   @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
@endsection
