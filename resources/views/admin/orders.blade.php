@extends('admin.layout.main')
@section('content')

<section>
        <div class="container-fluid">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-header">
                  <h4>Order List</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-striped table-hover">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Customer Name</th>
                          <th>Medicine Name</th>
                          <th>quantity</th>
                          <th>Date</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      @foreach ($orderlist as $order) 
                      <tbody>
                        <tr>
                          <td>{{$order['id']}}</td>
                          <td>{{$order['mediname']}}</td>
                          <td>{{$order['name']}}</td>
                          <td>{{$order['quantity']}}</td>
                          <td>{{$order['date']}}</td>
                          <td>
                                <a href="{{route('admin.editmedicine', $order['id'])}}">Confirm</a> |
                                <a href="{{route('admin.deletemedicine', $order['id'])}}">Remove</a>
                          </td>
                        </tr>
                      </tbody>
                      @endforeach
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
@endsection
@section('title')
Orders
@endsection