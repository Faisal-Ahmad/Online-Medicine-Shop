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
                          <th>Medicine Name</th>
                          <th>Customer Name</th>
                          <th>quantity</th>
                          <th>Price</th>
                          <th>Payment Type</th>
                          <th>Purchase Date</th>
                        </tr>
                      </thead>
                      @foreach ($purchaselist as $purchase) 
                      <tbody>
                        <tr>
                          <td>{{$purchase['id']}}</td>
                          <td>{{$purchase['mediname']}}</td>
                          <td>{{$purchase['name']}}</td>
                          <td>{{$purchase['quantity']}}</td>
                          <td>{{$purchase['price']}}</td>
                          <td>{{$purchase['paymenttype']}}</td>
                          <td>{{$purchase['purchasedate']}}</td>
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
Purchase
@endsection