<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>MeroShop
    
    </title>
@include('admin.css')
<style>
    .div_center{
        text-align : center;
        padding-top: 40px;
    }
    
    
    .input_color{
        color:black;
        padding: 10px;
        margin:10px;
    }
    .center{
        margin:auto;
        width: 50%;
        text-align: center;
        margin-top:30px;
        border: 3px solid white;

    }
    .h2s{
        font-size:40px;
    }
    table,th,tr,td{
        padding:10px;
        margin:10px;
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


<div class="div_center">
    <h2 class="h2s">
        Add Category
    </h2>
    <form action="{{url('/add_category')}}" method="POST">
        @csrf
        <input type="text" name="category" placeholder="Write Category name" class="input_color">
        <input type="submit" value="Add Category" class="btn btn-primary">
    </form>


</div>


<table class="center">
    <tr>
    <td>Category Name</td>
    <td>Action</td>
</tr>
@foreach($data as $data)
<tr>
    <td>{{$data->category_name}}</td>
    <td><a onclick="return confirm('Are you sure do you want to delete?')" href="{{url('delete_category',$data->id)}}" class="btn btn-danger"> Delete</a></td>
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