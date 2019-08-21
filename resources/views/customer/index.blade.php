@extends('customer.layout.main')
@section('content')
<!-- Header Section-->
      <section class="dashboard-header section-padding">
        <div class="container-fluid">
          <header> 
            <h1 class="h2 display">Admin Profile</h1>
          </header>
          <form method="post">
          @csrf
            <div class="form-group">
              <label for="formGroupExampleInput">Name </label>
              <input type="text" class="form-control" value="{{$customer['name']}}" name="name" id="formGroupExampleInput">
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput2">Contact</label>
              <input type="text" class="form-control" value="{{$customer['contact']}}" name="contact" id="formGroupExampleInput2" >
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput2">Email</label>
              <input type="text" class="form-control" value="{{$customer['email']}}" name="email" id="formGroupExampleInput2" ><br/>
              <label for="formGroupExampleInput2">Address</label>
            </div>
            <div class="input-group">
              <textarea class="form-control" name="address" aria-label="With textarea">{{$customer['address']}}</textarea>
            </div><br/>
            <div class="form-group text-center">
              <input type="submit" value="Update" class="btn btn-primary">
            </div>
          </form>
          </div>
        </div>
      </section>
@endsection
@section('title')
Supplier Home
@endsection