<!DOCTYPE html>
<html>
   <head>
    <base href="/public">
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
      <title>MeroShop</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="home/css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="home/css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="home/css/responsive.css" rel="stylesheet" />

   </head>
   <body>

         <!-- header section strats -->

         <!-- end header section -->
@include('home.header')


<div class="container-fluid" style="margin:auto; text-align:center;witdth:50%; padding:30px; background-color:white;">
<h1>Product Details</h1>
                     <div class="img-box">
                        <img src="product/{{$product->image}}" alt="">
                     </div>
                     <div class="detail-box">

                            

                     <h6>Product Category: 
                        {{$product->category}}
                        </h6>
                        @if($product->discount!=null)
                        
                        
                        <h6 style="color: green">
                           Discount
                           <br>
                        {{$product->discount}}
                            
                        </h6>
                        <h6 style="text-decoration: line-through; color:red ">
                        Price
                           <br>
                        {{$product->price}}
                           
                        </h6> 
                        @else
                        <h6> 
                        Price
                        <br>
                        {{$product->price}}
                      </h6>
                        @endif
                      

                        <h6>
                            Product Description : 
                        {{$product->description}}
                        </h6>
                        <h6>
                            Product Quantity : 
                        </h6>
                        <form action="{{url('add_cart',$product->id)}}" method="Post" >   
                              @csrf  
                              <div class ="">
                                 <div class=""> 
                                 <input type ="number" name="quantity" value="1" min="1" style="width: 90px"> 
                                
                               
                                 <input type="submit" value="Add to Cart">
                                 </div>
                                 
                                 </div>
                              </form>


                        
                     </div>
                  </div>
               </div>
              
@include('home.footer')

</div>
         <!-- slider section -->

         <!-- end slider section -->
      </div>
    
      <script src="home/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="home/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="home/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="home/js/custom.js"></script>
   </body>
</html>