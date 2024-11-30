<header class="header_section">
            <div class="container">
               <nav class="navbar navbar-expand-lg custom_nav-container ">
                  <a class="navbar-brand" href="{{url('/')}}"><img width="250" src="images/logo.png" alt="MeroShop" /></a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class=""> </span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav">
                        <li class="nav-item active">
                           <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
                        </li>

                        <li class="nav-item">
                           <a class="nav-link" href="{{url('products')}}">Products</a>
                        </li>
                     
                        <li class="nav-item">
                           <a class="nav-link" href="{{url('contact')}}">Contact</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="{{url('show_cart')}}">Cart</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="{{url('show_order')}}">Order</a>
                        </li>
                        @if (Route::has('login'))
                       @auth 
                       <li class="nav-item">
                          <form action="{{route('logout')}}" method="post" class="inline">
                            @csrf
                            
                        <button type="submit" id="logincss" class="button1">
                            {{__('Log out')}}
                        </button>
                        </form>
                        </li>

                        <li class="nav-item">
            <!-- Redirect to profile page -->
            <a class="button1" id="logincss" href="{{ url('/user/profile') }}">Profile</a>
        </li>
                       @else
                       <li class="nav-item">
                           <a class="button1" id="logincss" href="{{ route('login') }}">Login</a>
                        </li>

                        <li class="nav-item">
                           <a class="button1" href="{{ route('register') }}">Register</a>
                        </li>
                        @endauth

@endif

                     
                     </ul>
                  </div>
               </nav>
            </div>
         </header>