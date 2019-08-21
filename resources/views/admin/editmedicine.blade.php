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
              <input type="text" class="form-control" value="{{$medicine['name']}}" name="name" id="formGroupExampleInput">
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput">Price </label>
              <input type="text" class="form-control" value="{{$medicine['price']}}" name="price" id="formGroupExampleInput">
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput">Vandor Name </label>
              <input type="text" class="form-control" value="{{$medicine['vendorname']}}" name="vname" id="formGroupExampleInput">
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput">Category </label>
              <select class="form-control" name="category">
					<option @if($medicine['category' ]) =="aspirin genre" selected @endif >aspirin genre</option>
					<option @if($medicine['category' ]) =="peracetamol genre" selected @endif>peracetamol genre</option>
				</select>
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput2">Type</label>
              <select class="form-control" name="scategory">
					<option @if($medicine['scategory' ]) =="Liquid" selected @endif >Liquid</option>
					<option @if($medicine['scategory' ]) =="Solid" selected @endif>Solid</option>
				</select>
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput2">Quantity</label>
              <input type="text" class="form-control" value="{{$medicine['quantity']}}" name="quantity" id="formGroupExampleInput2" ><br/>
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput2">Available</label>
              <input type="text" class="form-control" value="{{$medicine['available']}}" name="available" id="formGroupExampleInput2" ><br/>
            </div>
            <div class="form-group text-center">
              <input type="submit" value="Update" class="btn btn-primary">
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