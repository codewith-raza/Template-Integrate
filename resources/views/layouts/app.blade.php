<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="MHS">

    <!--favicon icon-->
    <link rel="icon" type="image/png" href="{{asset('assets/img/favicon.png')}}">

    <title>Diverse Home</title>

    <!--google font-->
    <link href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">


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

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="assets/vendor/html5shiv.js"></script>
    <script src="assets/vendor/respond.min.js"></script>
    <![endif]-->
</head>
<body class="app header-fixed left-sidebar-fixed right-sidebar-fixed right-sidebar-overlay right-sidebar-hidden">

   <!--===========header start===========-->
<header class="app-header navbar">

<!--brand start-->
<div class="navbar-brand">
    <a class="" href="index.html">
        <img src="{{asset('assets/img/logo-dark.png')}}" srcset="assets/img/logo-dark@2x.png 2x" alt="">
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


    <li class="nav-item dropdown dropdown-slide d-md-down-none">
        <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
            <i class="ti-bell"></i>
            <span class="badge badge-danger notification-alarm"> </span>
        </a>
        <div class="dropdown-menu dropdown-menu-right">

            <div class="dropdown-header pb-3">
                <strong>You have 6 Notifications</strong>
            </div>

            <a href="#" class="dropdown-item">
                <i class="icon-basket-loaded text-primary"></i> New order
            </a>
            <a href="#" class="dropdown-item">
                <i class="icon-user-follow text-success"></i> New registered member
            </a>
            <a href="#" class="dropdown-item">
                <i class=" icon-layers text-danger"></i> Server error report
            </a>
            <a href="#" class="dropdown-item">
                <i class=" icon-note text-warning"></i> Database report
            </a>

            <a href="#" class="dropdown-item">
                <i class=" icon-present text-info"></i> Order confirmation
            </a>

        </div>
    </li>
    <li class="nav-item dropdown dropdown-slide d-md-down-none">
        <a class="nav-link nav-pill" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
            <i class=" ti-view-grid"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right dropdown-menu-ql-gird">

            <div class="dropdown-header pb-3">
                <strong>Quick Links</strong>
            </div>

            <div class="quick-links-grid">
                <a href="#" class="ql-grid-item">
                    <i class="  ti-files text-primary"></i>
                    <span class="ql-grid-title">New Task</span>
                </a>
                <a href="#" class="ql-grid-item">
                    <i class="  ti-check-box text-success"></i>
                    <span class="ql-grid-title">Assign Task</span>
                </a>
            </div>
            <div class="quick-links-grid">
                <a href="#" class="ql-grid-item">
                    <i class="  ti-truck text-warning"></i>
                    <span class="ql-grid-title">Create Orders</span>
                </a>
                <a href="#" class="ql-grid-item">
                    <i class=" icon-layers text-info"></i>
                    <span class="ql-grid-title">New Orders</span>
                </a>
            </div>

        </div>
    </li>

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

            <a class="dropdown-item" href="#"><i class=" ti-reload"></i> Activity</a>
            <a class="dropdown-item" href="#"><i class=" ti-email"></i> Message</a>
            <a class="dropdown-item" href="#"><i class=" ti-user"></i> Profile</a>
            <a class="dropdown-item" href="#"><i class=" ti-layers-alt"></i> Projects <span class="badge badge-primary">4</span> </a>

            <div class="dropdown-divider"></div>

            <a class="dropdown-item" href="#"><i class=" ti-lock"></i> Lock Account</a>
            <a class="dropdown-item" href="{{ route('login') }}"><i class=" ti-unlock"></i> Logout</a>
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

    @yield('mainsection')

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


    @yield('script')

</body>
</html>

