@extends('admin.layout.main')
@section('content')

      <section class="dashboard-header section-padding">
        <div class="container-fluid">
            <header> 
            <h1 class="h2 display">Add New Medicine</h1>
          </header>
          <form method="post">
          @csrf
            <div class="form-group">
              <label for="formGroupExampleInput">Name </label>
              <input type="text" class="form-control" name="name" id="formGroupExampleInput">
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput2">Price</label>
              <input type="text" class="form-control"  name="price" id="formGroupExampleInput2" >
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput2">Vendor Name</label>
              <input type="text" class="form-control"  name="vname" id="formGroupExampleInput2" ><br/>
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput2">Category </label>
              <select class="form-control" name="category">
                  <option>aspirin genre</option>
                  <option>peracetamol genre</option>
                </select>
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput2">Type </label>
              <select class="form-control" name="scategory">
                  <option>Liquid</option>
                  <option>Solid</option>
                </select>
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput2">quantity </label>
              <input type="text" class="form-control"  name="quantity" id="formGroupExampleInput2" ><br/>
            </div>
            <div class="form-group text-center">
              <input type="submit" value="Add" class="btn btn-primary">
            </div>
          </form>
          </div>
        </div>
      </section>
@endsection
@section('title')
Add Product
@endsection