<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
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
        <div class="main-panel style="background:#5FA0C9;">
        <div class="content-wrapper">

        @if(session()->has('message'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
            {{session()->get('message')}}
        </div>
        @endif
        
    <div class="div_center">
        <h1 class="h2s">Add product</h1>

        <form action="{{url('/update_product_confirm',$product->id)}}" method="POST" enctype="multipart/form-data">
   @csrf
        <div class="div_design">
    <label >Product Title</label>
    <input type="text" name="title" placeholder="Write Title" class="input_color" required="" value="{{$product->title}}">
</div>
   
<div class="div_design">
    <label >Product Description:</label>
    <input type="text" name="description" placeholder="Write Description"  class="input_color"  value="{{$product->description}}">
</div>
   
<div class="div_design">
    <label >Product Price: </label>
    <input type="number" name="price" placeholder="Write price" class="input_color"   value="{{$product->price}}">
</div>

<div class="div_design">
    <label >Discount Price: </label>
    <input type="number" name="discount" placeholder="Write a Discount" class="input_color"   value="{{$product->discount}}">
</div>
   
<div class="div_design">
    <label >Product Quantity: </label>
    <input type="number" min="0" name="quantity" placeholder="Write Quantity" class="input_color"   value="{{$product->quantity}}">
</div>
   
<div class="div_design">
    <label >Product Category: </label>
    <select class="input_color" name="category" required="">
    <!-- <option value="{{$product->category}}" selected=""> {{$product->category}}</option> -->
    @foreach($category as $category)
    <option value="{{$category->category_name}}">{{$category->category_name}}</option>
        @endforeach
       

    </select>
</div>
   
<div class="div_design">
    <label >Current Product Image: </label>
    <img src="/product/{{$product->image}}" alt="" style="max-width:200px; margin:auto;">
</div>

<div class="div_design">
    <label >Change Product Image: </label>
    <input type="file" name="image" placeholder="Image" class="" required="" style="border:1px solid white;">
</div>

   <div class="div_design"> 
<input type="submit" value="Update Product" class="btn btn-primary">
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