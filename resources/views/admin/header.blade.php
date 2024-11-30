<div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar p-0 fixed-top d-flex flex-row" >
          <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center" style="background:#303765;">
            <a class="navbar-brand brand-logo-mini" href="{{url('/')}}" >MS</a>
          </div>
          <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-menu"></span>
            </button>
            <ul class="navbar-nav w-100">
              <li class="nav-item w-100">
               
                  @yield('form')
                
              </li>
            </ul>
            <ul class="navbar-nav navbar-nav-right">
            

<li>
<x-app-layout ></x-app-layout>
</li>

</ul>   

            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">   
            <span class="mdi mdi-format-line-spacing"></span>
            </button>
          </div>
        </nav>