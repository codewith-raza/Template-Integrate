<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="MHS">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!--favicon icon-->
    <link rel="icon" type="image/png" href="{{asset('assets/img/main.png')}}">
    <title>Diverse Home</title>

    <!--google font-->
    <link href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">  


    <!--common style-->
    <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/lobicard/css/lobicard.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/simple-line-icons/css/simple-line-icons.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/themify-icons/css/themify-icons.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/weather-icons/css/weather-icons.min.css')}}" rel="stylesheet">

    <!--easy pie chart-->
    <link href="{{asset('assets/vendor/jquery-easy-pie-chart/jquery.easy-pie-chart.css')}}" rel="stylesheet">

    <!--custom css-->
    <link href="{{asset('assets/css/main.css')}}" rel="stylesheet">

    
</head>

<body class="app header-fixed sidebar-fixed aside-menu-fixed pace-done sidebar-lg-show">
   <!--===========header start===========-->
<header class="app-header navbar">
  <!--brand start-->
    <div class="navbar-brand">
        <a class="" href="{{route('dashboard')}}">
            <img src="{{asset('assets/img/main.png')}}" srcset="assets/img/logo-dark@2x.png 2x" style="width: 200px;"  alt="">
        </a>
    </div>
    <!--brand end-->

    <!--left side nav toggle start-->
    <ul class="nav navbar-nav mr-auto">
        <li class="nav-item d-lg-none">
            <button class="navbar-toggler mobile-leftside-toggler" type="button"><i class="ti-align-right"></i></button>
        </li>
        <li class="nav-item d-md-down-none">
            <a class="nav-link navbar-toggler left-sidebar-toggler" href="#"><i class=" ti-align-right"></i></a>
        </li>
        <li class="nav-item d-md-down-none-">
            <!--search start-->
            <a class="nav-link search-toggle" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                <i class="ti-search"></i>
            </a>
            <div class="search-container">
                <div class="outer-close search-toggle">
                    <a class="close"><span></span></a>
                </div>

                <div class="container search-wrap">
                    <div class="row">
                        <div class="col text-left">
                            <a class="" href="#">
                                <img src="{{asset('assets/img/logo.png')}}" srcset="assets/img/logo@2x.png 2x" alt="">
                            </a>
                            <form class="mt-3">
                                <div class="form-row align-items-center">
                                    <input type="text" class="form-control custom-search"  placeholder="Search">
                                </div>
                            </form>

                            <div class="search-list">
                                <h5 class="text-white mb-4">Search Results</h5>
                                <ul class="list-unstyled ">
                                    <li>
                                        <a href="#" class="text-white">
                                            <span class="bg-danger">
                                                S
                                            </span>
                                            Simply dummy text of the printing
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-white">
                                            <span class="bg-success">
                                                C
                                            </span>
                                            Contrary Ipsum is not simply random text
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-white">
                                            <span class="bg-info">
                                                <i class="icon-basket-loaded "></i>
                                            </span>
                                            Ipsum has been industry's standard dummy
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--search end-->
        </li>
    </ul>
    <!--left side nav toggle end-->

    <!--right side nav start-->
    <ul class="nav navbar-nav ml-auto">

        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/dashboard') }}" class="btn btn-danger btn-sm mt-0">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="btn btn-primary btn-sm mt-0">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="btn btn-danger btn-sm mt-0">Register</a>
                @endif
                @endauth
            </div>
            @endif
        
        <li class="nav-item dropdown dropdown-slide">
            <a class="nav-link nav-pill user-avatar" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                <img src="{{asset('assets/img/user.png')}}" alt="John Doe">
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-accout">
                <div class="dropdown-header pb-3">
                    <div class="media d-user">
                        <img class="align-self-center mr-3" src="{{asset('assets/img/user.png')}}" alt="John Doe">
                        <div class="media-body">
                            <h5 class="mt-0 mb-0">John Doe</h5>
                            <span>john@gmail.com</span>
                        </div>
                    </div>
                </div>
                <a class="dropdown-item" href="javascript:void" onclick="$('#logout-form').submit();">
                <i class=" ti-unlock"></i>Logout
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </li>

        <!--right side toggler-->
        <li class="nav-item d-lg-none">
            <button class="navbar-toggler mobile-rightside-toggler" type="button"><i class="icon-options-vertical"></i></button>
        </li>
        <li class="nav-item d-md-down-none">
            <a class="nav-link navbar-toggler right-sidebar-toggler" href="#"><i class="icon-options-vertical"></i></a>
        </li> 
    </ul>
    <!--right side nav end-->
</header>
<!--===========header end===========-->
  
<!--===========app body start===========-->
<div class="app-body">
      
       <!--left sidebar start-->

        <div class="left-sidebar">
          <nav class="sidebar-menu">
              <ul id="nav-accordion">
                    <li class="sub-menu">
                        <a href="{{ route('dashboard') }}" class="{{ request()->is('dashboard') ? 'active' : '' }}">
                            <i class="ti-home"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="sub-menu">
                        <a href="{{ url('user') }}" class="{{ request()->is('user') ? 'active' : '' }}">
                            <i class=" icon-people"></i>
                            <span>Users</span>
                        </a>
                    </li>

                    <li class="sub-menu">
                        <a href="{{ url('question') }}" class="{{ request()->is('question') ? 'active' : '' }}">
                            <i class="ti-archive"></i>
                            <span>Questions</span>
                        </a>  
                    </li>

                    <li class="sub-menu">
                        <a href="countries" class="{{ request()->is('countries') ? 'active' : '' }}">
                            <i class=" ti-pencil-alt"></i>
                            <span>Contries</span>
                        </a>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="icon-calendar"></i>
                            <span>Calendar </span>
                        </a>
                    </li> 
                </ul>
            </nav>
        </div>

    <!--left sidebar end-->

  @yield('mainsection')

  @yield('content')

</div>
<!--===========app body end===========-->

      <!--===========footer start===========-->
      <footer class="app-footer">
          <div class="container-fluid">
              <div class="row">
                  <div class="col-8">
                  <?php echo date("Y"); ?> © Copyright All Rights Reserved
                  </div>
                  <div class="col-4">
                      <a href="#" class="float-right back-top">
                          <i class=" ti-arrow-circle-up"></i>
                      </a>
                  </div>
              </div>
          </div>
      </footer>
      <!--===========footer end===========-->

  
      @stack('script')

</body>
</html>
