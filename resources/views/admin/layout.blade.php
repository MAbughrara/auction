<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bootstrap Dashboard by Bootstrapious.com</title>
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
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<body>
<!-- Side Navbar -->
<nav class="side-navbar">
    <div class="side-navbar-wrapper">
        <div class="sidenav-header d-flex align-items-center justify-content-center">
            <div class="sidenav-header-inner text-center"><img src="{{ asset('img/avatar-1.jpg') }}" alt="person"
                                                               class="img-fluid rounded-circle">
                <h2 class="h5 text-uppercase">Anderson Hardy</h2><span class="text-uppercase">Web Developer</span>
            </div>
            <div class="sidenav-header-logo"><a href="index.html" class="brand-small text-center">
                    <strong>B</strong><strong class="text-primary">D</strong></a></div>
        </div>
        <div class="main-menu">
            <ul id="side-main-menu" class="side-menu list-unstyled">
                <li class="active"><a href="/admin"> <i class="icon-home"></i><span>Home</span></a></li>
                <li><a href="/admin/users"><i class="icon-form"></i><span>Users</span></a></li>
                <li><a href="/admin/brands"><i class="icon-form"></i><span>Brands</span></a></li>
                <li><a href="/admin/forms"><i class="icon-form"></i><span>Forms</span></a></li>
                <li><a href="/admin/charts"><i class="icon-presentation"></i><span>Charts</span></a></li>
                <li><a href="/admin/tables"> <i class="icon-grid"> </i><span>Tables  </span></a></li>
                <li><a href="/admin/login"> <i
                                class="icon-interface-windows"></i><span>Login page                        </span></a>
                </li>
                <li><a href="#"> <i class="icon-mail"></i><span>Demo</span>
                        <div class="badge badge-warning">6 New</div>
                    </a></li>
            </ul>
        </div>
        <div class="admin-menu">
            <ul id="side-admin-menu" class="side-menu list-unstyled">
                <li><a href="#pages-nav-list" data-toggle="collapse" aria-expanded="false"><i
                                class="icon-interface-windows"></i><span>Dropdown</span>
                        <div class="arrow pull-right"><i class="fa fa-angle-down"></i></div>
                    </a>
                    <ul id="pages-nav-list" class="collapse list-unstyled">
                        <li><a href="#">Page 1</a></li>
                        <li><a href="#">Page 2</a></li>
                        <li><a href="#">Page 3</a></li>
                        <li><a href="#">Page 4</a></li>
                    </ul>
                </li>
                <li><a href="#"> <i class="icon-screen"> </i><span>Demo</span></a></li>
                <li><a href="#"> <i class="icon-flask"> </i><span>Demo</span>
                        <div class="badge badge-info">Special</div>
                    </a></li>
                <li><a href=""> <i class="icon-flask"> </i><span>Demo</span></a></li>
                <li><a href=""> <i class="icon-picture"> </i><span>Demo</span></a></li>
            </ul>
        </div>
    </div>
</nav>
@yield('content')
<!-- Javascript files-->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
<script src="{{ asset('css/admin/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('css/admin/vendor/jquery.cookie/jquery.cookie.js') }}"></script>
<script src="{{ asset('js/admin/grasp_mobile_progress_circle-1.0.0.min.js') }}"></script>
<script src="{{ asset('css/admin/vendor/jquery-validation/jquery.validate.min.js') }}"></script>
<script src="{{ asset('css/admin/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
<script src="{{ asset('js/admin/charts-home.js') }}"></script>
<script src="{{ asset('js/admin/front.js') }}"></script>
<!-- Google Analytics: change UA-XXXXX-X to be your site's ID.-->
<!---->
<script>
    (function (b, o, i, l, e, r) {
        b.GoogleAnalyticsObject = l;
        b[l] || (b[l] =
            function () {
                (b[l].q = b[l].q || []).push(arguments)
            });
        b[l].l = +new Date;
        e = o.createElement(i);
        r = o.getElementsByTagName(i)[0];
        e.src = '//www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e, r)
    }(window, document, 'script', 'ga'));
    ga('create', 'UA-XXXXX-X');
    ga('send', 'pageview');
</script>
</body>
</html>