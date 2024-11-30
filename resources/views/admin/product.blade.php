<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>MeroShop
    
    </title>
@include('admin.css')
  </head>
  <style>
    .div_center{
        text-align : center;
        padding-top: 40px;
    }
    .h2s{
        font-size:40px;
        padding-bottom: 20px;
    }
    .input_color{
        color:black;
        padding-bottom:20px;
    }
    label{ 
        display: inline-block;
        width: 200px;
    } 
    .div_design{
        padding-bottom:12px;

    }  
  </style>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
@include('admin.sidebar')
      <!-- partial -->
@include('admin.header')
        <!-- partial -->
        <div class="main-panel" >

        <div class="content-wrapper">

        @if(session()->has('message'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
            {{session()->get('message')}}
        </div>
        @endif
        
    <div class="div_center">
        <h1 class="h2s">Add product</h1>

        <form action="{{url('/add_product')}}" method="POST" enctype="multipart/form-data">
   @csrf
        <div class="div_design">
    <label >Product Title</label>
    <input type="text" name="title" placeholder="Write Title" class="input_color">
</div>
   
<div class="div_design">
    <label >Product Description:</label>
    <input type="text" name="description" placeholder="Write Description" class="input_color">
</div>
   
<div class="div_design">
    <label >Product Price: </label>
    <input type="number" name="price" placeholder="Write price" class="input_color">
</div>

<div class="div_design">
    <label >Discount Price: </label>
    <input type="number" name="discount" placeholder="Write a Discount" class="input_color">
</div>
   
<div class="div_design">
    <label >Product Quantity: </label>
    <input type="number" min="0" name="quantity" placeholder="Write Quantity" class="input_color">
</div>
   
<div class="div_design">
    <label >Product Category: </label>
    <select class="input_color" name="category" required="">
        <option value="" selected="">Add a category here</option>
       @foreach($category as $category)
        <option value="{{$category->category_name}}">{{$category->category_name}}</option>
        @endforeach
    </select>
</div>
   
<div class="div_design">
    <label >Product Image: </label>
    <input type="file" name="image" placeholder="Image" class="" required="" style="border:1px solid white;">
</div>
   <div class="div_design"> 
<input type="submit" value="Add Product" class="btn btn-primary">
   <label> 

</div>
</form>

</div>
</div>

    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>