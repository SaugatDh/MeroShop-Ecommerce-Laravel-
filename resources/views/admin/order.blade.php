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
    .title{
        text-align:center;
        font-size:25px;
        font-weight:bold;
        padding:10px;

    }
    .table{
        border: 2px solid black;
        margin:auto;
       
      
      
        text-align:center;
    }
    th{
        background-color:skyblue;
        padding : 10px;
    }
    .img_size{
        
    }
    p{
        color: skyblue;
        font-weight:bold;
    }
    .scroll{
        overflow:scroll;
        height:500px;
    }
</style>
  </head>
  <body >
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
@include('admin.sidebar')
      <!-- partial -->
@include('admin.header')
@extends('admin.header')
@section('form')
<form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search" action="{{url('search')}}" method="get">
<input type="text" class="form-control " placeholder="Search" name="search">
<input type="submit" value="Search" class="btn btn-outline-primary bg-indigo-600 text-white mx-2 px-4 py-2 rounded-lg hover:bg-indigo-700 focus:ring-2 focus:ring-indigo-500 focus:ring-opacity-50">
</form>
@endsection
        <!-- partial -->
        <div class="main-panel">

<div class="content-wrapper">

<h1 class="title">All order</h1>

<div></div>
<div class="scroll">
<table class="table">
    <tr style="  position: sticky;
  top: 0;
  background-color: #f1f1f1; /* Change to desired color */
  z-index: 10;">
        <th>Name</th>
        <th>Email</th>
        <th>Adress</th>
        <th>Phone</th>
        <th>Product Title</th>
        <th>Quantity</th>
        <th>Price</th>
        <th>Payment Status</th>
        <th>Delivery Status</th>
        <th>Image</th>
        <th>Delivered</th>
        <th>Print PDF</th>
      
    </tr>
    @forelse($order as $order)
    <tr>
        <td>{{$order->name}}</td>
        <td>{{$order->email}}</td>
        <td>{{$order->address}}</td>
        <td>{{$order->phone}}</td>
        <td>{{$order->product_title}}</td>
        <td>{{$order->quantity}}</td>
        <td>{{$order->price}}</td>
        <td>{{$order->payment_status}}</td>
        <td>{{$order->delivery_status}}</td>
        <td>
        <a href="/product/{{$order->image}}" target="_blank">
    <img src="/product/{{$order->image}}" >

       
        </td>
        <td>
            @if($order->delivery_status=='processing')
            <a href="{{url('delivered',$order->id)}}" onclick="return confirm('Are you sure this product is delivered')" class="btn btn-primary">Delivered</a>
          
       @else
       <p>Delivered</p>
       @endif
        </td>
      <td><a href="{{url('print_pdf',$order->id)}}" class="btn btn-secondary">Print PDF</a></td>
    </tr>
    @empty
    <div>
        <tr><td colspan="16">No data found!!</td></tr>
            
        
    </div>
    @endforelse
</table>
</div>
</div>
</div>

    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
    
  </body>
</html>