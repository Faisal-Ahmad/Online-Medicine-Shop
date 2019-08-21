@extends('admin.layout.main')
@section('content')

<section>
        <div class="container-fluid">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-header">
                  <h4>Customer List</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-striped table-hover">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Name</th>
                          <th>Contact</th>
                          <th>Email</th>
                          <th>Addrress</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      @foreach ($customerlist as $customer) 
                      <tbody>
                        <tr>
                          <td>{{$customer['id']}}</td>
                          <td>{{$customer['name']}}</td>
                          <td>{{$customer['contact']}}</td>
                          <td>{{$customer['email']}}</td>
                          <td>{{$customer['address']}}</td>
                          <td>
                                <a href="{{route('admin.deletecustomer', $customer['id'])}}">Delete</a> 
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
Customers
@endsection