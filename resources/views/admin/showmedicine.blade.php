@extends('admin.layout.main')
@section('content')

<section>
        <div class="container-fluid">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-header">
                  <h4>Medicine List</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-striped table-hover">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Name</th>
                          <th>Price</th>
                          <th>Vendor Name</th>
                          <th>Category</th>
                          <th>Type</th>
                          <th>Quantity</th>
                          <th>Avaiable</th>
                          <th>Price</th>
                        </tr>
                      </thead>
                      @foreach ($medicinelist as $medicine) 
                      <tbody>
                        <tr>
                          <td>{{$medicine['id']}}</td>
                          <td>{{$medicine['name']}}</td>
                          <td>{{$medicine['price']}}</td>
                          <td>{{$medicine['vendorname']}}</td>
                          <td>{{$medicine['category']}}</td>
                          <td>{{$medicine['scategory']}}</td>
                          <td>{{$medicine['quantity']}}</td>
                          <td>{{$medicine['available']}}</td>
                          <td>
                                <a href="{{route('admin.editmedicine', $medicine['id'])}}">Edit</a> |
                                <a href="{{route('admin.deletemedicine', $medicine['id'])}}">Delete</a>
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
Medicne
@endsection