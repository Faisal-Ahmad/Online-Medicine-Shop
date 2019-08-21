@extends('admin.layout.main')
@section('content')
<!-- Header Section-->
      <section class="dashboard-header section-padding">
        <div class="container-fluid">
          <header> 
            <h1 class="h2 display">Customer</h1>
          </header>
          <form method="post">
          @csrf
            <div class="form-group">
              <label for="formGroupExampleInput">ID </label>
              <input type="text" class="form-control" value="{{$customer['id']}}" name="name" id="formGroupExampleInput" readonly>
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput2">Name</label>
              <input type="text" class="form-control" value="{{$customer['name']}}" name="contact" id="formGroupExampleInput2" readonly>
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput2">Contact</label>
              <input type="text" class="form-control" value="{{$customer['contact']}}" name="desc" id="formGroupExampleInput2" readonly><br/>
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput2">Email</label>
              <input type="text" class="form-control" value="{{$customer['email']}}" name="price" id="formGroupExampleInput2" readonly><br/>
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput2">Address</label>
              <input type="text" class="form-control" value="{{$customer['address']}}" name="price" id="formGroupExampleInput2" readonly><br/>
            </div>
            <div class="form-group text-center">
            <h3 class="h3 display">Delete customer?</h3>
              <input type="submit" value="Delete" class="btn btn-primary">
              <input type="button" onclick="location.href='{{route('admin.showcustomer')}}'" value="Cancel" class="btn btn-primary">
            </div>
          </form>
          </div>
        </div>
      </section>
@endsection
@section('title')
Delete customer
@endsection