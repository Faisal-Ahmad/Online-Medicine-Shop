@extends('admin.layout.main')
@section('content')
<!-- Header Section-->
      <section class="dashboard-header section-padding">
        <div class="container-fluid">
          <header> 
            <h1 class="h2 display">Medicine</h1>
          </header>
          <form method="post">
          @csrf
            <div class="form-group">
              <label for="formGroupExampleInput">Name </label>
              <input type="text" class="form-control" value="{{$medicine['name']}}" name="name" id="formGroupExampleInput" readonly>
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput">Price </label>
              <input type="text" class="form-control" value="{{$medicine['price']}}" name="price" id="formGroupExampleInput" readonly>
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput">Vandor Name </label>
              <input type="text" class="form-control" value="{{$medicine['vendorname']}}" name="vname" id="formGroupExampleInput" readonly>
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput">Category </label>
              <input type="text" class="form-control" value="{{$medicine['category']}}" name="vname" id="formGroupExampleInput" readonly>
            </div>s
            <div class="form-group">
              <label for="formGroupExampleInput2">Type</label>
              <input type="text" class="form-control" value="{{$medicine['scategory']}}" name="quantity" id="formGroupExampleInput2" readonly><br/>
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput2">Quantity</label>
              <input type="text" class="form-control" value="{{$medicine['quantity']}}" name="quantity" id="formGroupExampleInput2" readonly><br/>
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput2">Available</label>
              <input type="text" class="form-control" value="{{$medicine['available']}}" name="available" id="formGroupExampleInput2" readonly><br/>
            </div>
            <div class="form-group text-center">
            <h3 class="h3 display">Delete Medicine?</h3>
              <input type="submit" value="Delete" class="btn btn-primary">
              <input type="button" onclick="location.href='{{route('admin.medicines')}}'" value="Cancel" class="btn btn-primary">
            </div>
          </form>
          </div>
        </div>
      </section>
@endsection
@section('title')
Edit Product
@endsection