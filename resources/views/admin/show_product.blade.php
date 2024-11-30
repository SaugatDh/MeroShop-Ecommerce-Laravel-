<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>MeroShop
    
    </title>
@include('admin.css')
<style type="text/css">
    .center{
        margin: auto;
        width:100%;
     
        text-align:center;
        margin-top:30px;
    }
    .font_size{
        text-align:center;
        font-size:40px;
        padding-top:20px;
    }
    .thead{
        background:#303765;
        height: 50px;
    }
    table,th,tr,td{
        border:2px solid white;
    }
</style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
@include('admin.sidebar')
      <!-- partial -->
@include('admin.header')
        <!-- partial -->
        <div class="main-panel">
    <div class="content-wrapper">
        
    @if(session()->has('message'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
            {{session()->get('message')}}
        </div>
        @endif
        <h2 class="font_size">All Products</h2>

    <table class="center">
        <tr class="thead">
        <th>Product Title</th>
        <th>Description</th>
        <th>Quantity</th>
        <th>Category</th>
        <th>Product Price</th>
        <th>Discount Price</th>
        <th>Product Image</th>
    <th>Delete</th>
<th>Edit</th></tr>
        


@foreach($product as $product)
        <tr >
            <td>{{$product->title}}</td>
            <td>{{$product->description}}</td>
            <td>{{$product->quantity}}</td>
            <td>{{$product->category}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->discount}}</td>
            <td>
                
            <img src="/product//{{$product->image}}" style="height:200px;width:300px;"></td>
<td><a href="{{url('delete_product',$product->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure do you want to delete the data?')">Delete</a></td>
<td><a href="{{url('update_product',$product->id)}}" class="btn btn-primary">Edit</a></td>

        </tr>
        @endforeach
    </table>



    </div>
</div>

    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>