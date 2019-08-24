@extends('customer.layout.main')
@section('content')
    <div class="container box">
        <div class="panel panel-default">
            <div class="panel-heading">Search Medicine 
            </div>
            <div class="panel-body">
                <select class="form-control" name="usertype" id="srctype">
                  <option value="name">Name</option>
                  <option value="category">Category</option>
                  <option value="vname">Vendor Name</option>
                </select>
                <input type="text" name="search" id="search" class="form-control" placeholder="Search..." onkeyup="fetch_customer_data(this.value)"/>
            </div>
            <div class="table-responsive">
                <table class="table table-striped" table-bordered>
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
                <tbody>
                </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('script')
<script>
 function fetch_customer_data(e)
    {
        var value = document.getElementById("srctype");
        var category = value.options[value.selectedIndex].value;
        $.ajax({
            url:"{{route('customer.action')}}",
            methode:'GET',
            data:{query:e,type:category},
            dataType:'json',
            success:  function(data){
                $('tbody').html(data.table_data);
            },
            error: function(error){
                console.log(error)
            }

        })
    }
    $( document ).ready(function() {
        fetch_customer_data('');
    });
</script>
@endsection