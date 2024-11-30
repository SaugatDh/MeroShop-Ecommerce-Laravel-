<section class="product_section layout_padding">
         <div class="container">
            <div class="heading_container heading_center">
           
               <div>
                  <form action="{{url('product_search')}}"method="get">
                     @csrf
                     <input class="form-control" type="text" name="search" placeholder="Search for Products">
                     <input type="submit" value="search">
                  </form>
               </div>
            </div>
            <div class="row">
          
               @foreach($product as $products)
               <div class="col-sm-6 col-md-4 col-lg-4">
                  <div class="box">
                     <div class="option_container">
                        <div class="options">
                           <a href="{{url('product_details',$products->id)}}" class="option1">
                           Product Details
                           </a>
                           
                              <form action="{{url('add_cart',$products->id)}}" method="Post" >   
                              @csrf  
                              <div class ="row">
                                 <div class="col-md-4"> 
                                 <input type ="number" name="quantity" value="1" min="1" style="width: 90px"> 
                                 </div>
                                 <div class="col-md-4">
                                 <input type="submit" value="Add to Cart">
                                 </div>
                                 
                                 </div>
                              </form>

                           

                        </div>
                     </div>
                     <div class="img-box">
                        <img src="product/{{$products->image}}" alt="">
                     </div>
                     <div class="detail-box">
                        <h5>
                           {{$products->title}}
                        </h5>
                        @if($products->discount!=null)
                        
                        
                        <h6 style="color: green">
                           Price
                           <br>
                        {{$products->discount}}
                            
                        </h6>
                        <h6 style="text-decoration: line-through; color:red">
                        MRP
                           <br>
                        {{$products->price}}
                           
                        </h6> 
                        @else
                        <h6 style="color: green"> 
                        Price
                        <br>
                        {{$products->price}}
                      </h6>
                        @endif
                        
                     </div>
                  </div>
               </div>
               
      @endforeach

      
<span style="padding-top:20px;">
      {!!$product->withQueryString()->links('pagination::bootstrap-5')!!}</span>
</div></div>
         
      </section>