<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{ asset('css/admin/vendor/bootstrap/css/bootstrap.min.css') }}">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{ asset('css/admin/vendor/font-awesome/css/font-awesome.min.css') }}">
    <!-- Custom icon font-->
    <link rel="stylesheet" href="{{ asset('css/admin/fontastic.css') }}">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <!-- jQuery Circle-->
    <link rel="stylesheet" href="{{ asset('css/admin/grasp_mobile_progress_circle-1.0.0.min.css') }}">
    <!-- Custom Scrollbar-->
    <link rel="stylesheet"
          href="{{ asset('css/admin/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css') }}">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{ asset('css/admin/style.default.css') }}" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{ asset('css/admin/custom.css') }}">
    <!-- Favicon-->
    <link rel="shortcut icon" href="favicon.png">
    <script src="{{ asset('js/admin/Charts.min.js') }}"></script>

    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<body>
<!-- Side Navbar -->
<nav class="side-navbar">
    <div class="side-navbar-wrapper">
        <div class="sidenav-header d-flex align-items-center justify-content-center">
            <div class="sidenav-header-inner text-center"><img src="{{ asset('storage/profile/default.png') }}"
                                                               alt="person"
                                                               class="img-fluid rounded-circle">
                <h2 class="h5 text-uppercase">Administrator</h2>
            </div>
            <div class="sidenav-header-logo"><a href="index.html" class="brand-small text-center">
                    <strong>B</strong><strong class="text-primary">D</strong></a></div>
        </div>
        <div class="main-menu">
            <ul id="side-main-menu" class="side-menu list-unstyled">
                <li class="active"><a href="/admin"> <i class="icon-home"></i><span>Home</span></a></li>
                <li><a href="/admin/users"><i class="icon-user"></i><span>Users</span></a></li>
                <li><a href="/admin/brands"><i class="icon-form"></i><span>Brands</span></a></li>
                <li><a href="/admin/auctions"><i class="icon-line-chart"></i><span>Auctions</span></a></li>
                {{--<li><a href="/admin/forms"><i class="icon-form"></i><span>Forms</span></a></li>--}}
                {{--<li><a href="/admin/charts"><i class="icon-presentation"></i><span>Charts</span></a></li>--}}
                {{--<li><a href="/admin/tables"> <i class="icon-grid"> </i><span>Tables  </span></a></li>--}}
                {{--<li><a href="/admin/login"> <i--}}
                {{--class="icon-interface-windows"></i><span>Login page                        </span></a>--}}
                {{--</li>--}}
                {{--<li><a href="#"> <i class="icon-mail"></i><span>Demo</span>--}}
                {{--<div class="badge badge-warning">6 New</div>--}}
                {{--</a></li>--}}
            </ul>
        </div>
        {{--<div class="admin-menu">--}}
        {{--<ul id="side-admin-menu" class="side-menu list-unstyled">--}}
        {{--<li><a href="#pages-nav-list" data-toggle="collapse" aria-expanded="false"><i--}}
        {{--class="icon-interface-windows"></i><span>Dropdown</span>--}}
        {{--<div class="arrow pull-right"><i class="fa fa-angle-down"></i></div>--}}
        {{--</a>--}}
        {{--<ul id="pages-nav-list" class="collapse list-unstyled">--}}
        {{--<li><a href="#">Page 1</a></li>--}}
        {{--<li><a href="#">Page 2</a></li>--}}
        {{--<li><a href="#">Page 3</a></li>--}}
        {{--<li><a href="#">Page 4</a></li>--}}
        {{--</ul>--}}
        {{--</li>--}}
        {{--<li><a href="#"> <i class="icon-screen"> </i><span>Demo</span></a></li>--}}
        {{--<li><a href="#"> <i class="icon-flask"> </i><span>Demo</span>--}}
        {{--<div class="badge badge-info">Special</div>--}}
        {{--</a></li>--}}
        {{--<li><a href=""> <i class="icon-flask"> </i><span>Demo</span></a></li>--}}
        {{--<li><a href=""> <i class="icon-picture"> </i><span>Demo</span></a></li>--}}
        {{--</ul>--}}
        {{--</div>--}}
    </div>
</nav>
<div class="page home-page">
    <!-- navbar-->
    <header class="header">
        <nav class="navbar">
            <div class="container-fluid">
                {{--<div class="navbar-holder d-flex align-items-center">--}}
                {{--<div class="navbar-header"><a id="toggle-btn" href="#" class="menu-btn"><i--}}
                {{--class="icon-bars"> </i></a><a href="index.html" class="navbar-brand">--}}

                {{--</a>--}}

                {{--</div>--}}
                <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center justify-content-start">
                    <li class="nav-item"><a href="/" class="nav-link logout"><span
                                    class="fa fa-home"></span> Home</a></li>
                    <li class="nav-item"><a href="/cars/create" class="nav-link"><span
                                    class="fa fa-plus"> Add Auction</span></a></li>
                </ul>
                <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center justify-content-end">
                    {{--<li class="nav-item dropdown"><a id="notifications" rel="nofollow" data-target="#" href="#"--}}
                                                     {{--data-toggle="dropdown" aria-haspopup="true"--}}
                                                     {{--aria-expanded="false" class="nav-link"><i--}}
                                    {{--class="fa fa-bell"></i><span class="badge badge-warning">12</span></a>--}}
                        {{--<ul aria-labelledby="notifications" class="dropdown-menu">--}}
                            {{--<li><a rel="nofollow" href="#" class="dropdown-item">--}}
                                    {{--<div class="notification d-flex justify-content-between">--}}
                                        {{--<div class="notification-content"><i class="fa fa-envelope"></i>You have--}}
                                            {{--6 new messages--}}
                                        {{--</div>--}}
                                        {{--<div class="notification-time">--}}
                                            {{--<small>4 minutes ago</small>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</a></li>--}}
                            {{--<li><a rel="nofollow" href="#" class="dropdown-item">--}}
                                    {{--<div class="notification d-flex justify-content-between">--}}
                                        {{--<div class="notification-content"><i class="fa fa-twitter"></i>You have--}}
                                            {{--2 followers--}}
                                        {{--</div>--}}
                                        {{--<div class="notification-time">--}}
                                            {{--<small>4 minutes ago</small>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</a></li>--}}
                            {{--<li><a rel="nofollow" href="#" class="dropdown-item">--}}
                                    {{--<div class="notification d-flex justify-content-between">--}}
                                        {{--<div class="notification-content"><i class="fa fa-upload"></i>Server--}}
                                            {{--Rebooted--}}
                                        {{--</div>--}}
                                        {{--<div class="notification-time">--}}
                                            {{--<small>4 minutes ago</small>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</a></li>--}}
                            {{--<li><a rel="nofollow" href="#" class="dropdown-item">--}}
                                    {{--<div class="notification d-flex justify-content-between">--}}
                                        {{--<div class="notification-content"><i class="fa fa-twitter"></i>You have--}}
                                            {{--2 followers--}}
                                        {{--</div>--}}
                                        {{--<div class="notification-time">--}}
                                            {{--<small>10 minutes ago</small>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</a></li>--}}
                            {{--<li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center">--}}
                                    {{--<strong> <i class="fa fa-bell"></i>view all notifications </strong></a></li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li class="nav-item dropdown"><a id="messages" rel="nofollow" data-target="#" href="#"--}}
                                                     {{--data-toggle="dropdown" aria-haspopup="true"--}}
                                                     {{--aria-expanded="false" class="nav-link"><i--}}
                                    {{--class="fa fa-envelope"></i><span class="badge badge-info">10</span></a>--}}
                        {{--<ul aria-labelledby="notifications" class="dropdown-menu">--}}
                            {{--<li><a rel="nofollow" href="#" class="dropdown-item d-flex">--}}
                                    {{--<div class="msg-profile"><img src="img/avatar-1.jpg" alt="..."--}}
                                                                  {{--class="img-fluid rounded-circle"></div>--}}
                                    {{--<div class="msg-body">--}}
                                        {{--<h3 class="h5">Jason Doe</h3><span>sent you a direct message</span>--}}
                                        {{--<small>3 days ago at 7:58 pm - 10.06.2014</small>--}}
                                    {{--</div>--}}
                                {{--</a></li>--}}
                            {{--<li><a rel="nofollow" href="#" class="dropdown-item d-flex">--}}
                                    {{--<div class="msg-profile"><img src="img/avatar-2.jpg" alt="..."--}}
                                                                  {{--class="img-fluid rounded-circle"></div>--}}
                                    {{--<div class="msg-body">--}}
                                        {{--<h3 class="h5">Frank Williams</h3><span>sent you a direct message</span>--}}
                                        {{--<small>3 days ago at 7:58 pm - 10.06.2014</small>--}}
                                    {{--</div>--}}
                                {{--</a></li>--}}
                            {{--<li><a rel="nofollow" href="#" class="dropdown-item d-flex">--}}
                                    {{--<div class="msg-profile"><img src="img/avatar-3.jpg" alt="..."--}}
                                                                  {{--class="img-fluid rounded-circle"></div>--}}
                                    {{--<div class="msg-body">--}}
                                        {{--<h3 class="h5">Ashley Wood</h3><span>sent you a direct message</span>--}}
                                        {{--<small>3 days ago at 7:58 pm - 10.06.2014</small>--}}
                                    {{--</div>--}}
                                {{--</a></li>--}}
                            {{--<li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center">--}}
                                    {{--<strong> <i class="fa fa-envelope"></i>Read all messages </strong></a></li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    <li class="nav-item">
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
                           class="nav-link logout">Logout
                            <span class="fa fa-sign-out">

                                </span>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
                {{--</div>--}}
            </div>
        </nav>
    </header>
    <div class="breadcrumb-holder">
        <div class="container-fluid">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                <li class="breadcrumb-item active">{{ ucfirst(substr(request()->path(),6,8)) }}</li>
            </ul>
        </div>
    </div>
    @yield('content')
    <footer class="main-footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <p>All Rights Reserved &copy; 2018</p>
                </div>
            </div>
        </div>
    </footer>
</div>
<!-- Javascript files-->
<script src="{{ asset('js/admin/jquery.js') }}"></script>
{{--<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>--}}

{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>--}}
<script src="{{ asset('js/admin/popper.min.js') }}"></script>
<script src="{{ asset('css/admin/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('css/admin/vendor/jquery.cookie/jquery.cookie.js') }}"></script>
<script src="{{ asset('js/admin/grasp_mobile_progress_circle-1.0.0.min.js') }}"></script>
<script src="{{ asset('css/admin/vendor/jquery-validation/jquery.validate.min.js') }}"></script>
<script src="{{ asset('css/admin/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js') }}"></script>
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>--}}
<script src="{{ asset('js/admin/charts-home.js') }}"></script>
<script src="{{ asset('js/admin/front.js') }}"></script>
</body>
</html>