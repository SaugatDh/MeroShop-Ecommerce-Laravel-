<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/favicon.png" type="">
      <title>Mero Shop</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="home/css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="home/css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="home/css/responsive.css" rel="stylesheet" />
<style>
    .center{
        margin:0 auto;
        text-align: center;
        padding: 30px;
        
    }
    table,th,td{
        border:1px solid blue;
        padding-top:20px;
        
    }
    th{
        font-size:20px;
        padding 5px;
        background-color:skyblue;
        
        
    }
    td{
        width:200px;
    }
    .img_deg{
        max-width:200px;
    }
    .total_deg{
        font: size 20px;
        padding:40px;

    }

    </style>
   </head>
   <body>
    
         <!-- header section strats -->




@include('home.header')


@if(session()->has('message'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
            {{session()->get('message')}}
        </div>
        @endif

        

<div class=" container-fluid" style="background:white; margin:auto;text-align:center;padding:40px;">
    <table class="center">
        <tr>
        <th >Product title</th>
        <th >Product Quantity</th>
        <th >Price</th>
        <th >Image</th>
        <th >Action</th>
    </tr>
    <?php $totalprice=0; ?>
    @foreach($cart as $cart)
        <tr>
            <td>{{$cart->product_title}}</td>
            <td>{{$cart->quantity}}</td>
            <td>Nrs {{$cart->price}}</td>
            <td><img class="img_deg" src="/product/{{$cart->image}}"></td>
            <td><a href="{{url('remove_cart',$cart->id)}}" onclick="return confirm('Are you sure do you want to remove the product?')" class="btn btn-danger">Remove</a></td>
        </tr>
        <?php $totalprice=$totalprice + $cart->price; ?>
        @endforeach
       
    </table>
    <div><h1 class="total_deg">Total Price : Nrs {{$totalprice}}</h1></div>
    <div>
    <h1 style="font-size: 25px; padding-bottom:15px;">Proceed to order</h1>
    <a href="{{url('cash_order')}}" class="btn btn-danger">Cash On Delivery</a>
<a href="{{url('stripe',$totalprice)}}" class="btn btn-danger">Pay Using Card</a>
      </div>
</div>
@include('home.footer')

      <!-- why section -->


      <!-- footer start -->

      <!-- footer end -->
     
      <!-- jQery -->
      <script src="home/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="home/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="home/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="home/js/custom.js"></script>
   </body>
</html>