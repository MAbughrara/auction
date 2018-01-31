@extends('admin.layout')
@section('content')
    <div class="page home-page">
        <!-- navbar-->
        <header class="header">
            <nav class="navbar">
                <div class="container-fluid">
                    <div class="navbar-holder d-flex align-items-center justify-content-between">
                        <div class="navbar-header"><a id="toggle-btn" href="#" class="menu-btn"><i
                                        class="icon-bars"> </i></a><a href="index.html" class="navbar-brand">
                                <div class="brand-text d-none d-md-inline-block"><span>Bootstrap </span><strong
                                            class="text-primary">Dashboard</strong></div>
                            </a></div>
                        <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                            <li class="nav-item dropdown"><a id="notifications" rel="nofollow" data-target="#" href="#"
                                                             data-toggle="dropdown" aria-haspopup="true"
                                                             aria-expanded="false" class="nav-link"><i
                                            class="fa fa-bell"></i><span class="badge badge-warning">12</span></a>
                                <ul aria-labelledby="notifications" class="dropdown-menu">
                                    <li><a rel="nofollow" href="#" class="dropdown-item">
                                            <div class="notification d-flex justify-content-between">
                                                <div class="notification-content"><i class="fa fa-envelope"></i>You have
                                                    6 new messages
                                                </div>
                                                <div class="notification-time">
                                                    <small>4 minutes ago</small>
                                                </div>
                                            </div>
                                        </a></li>
                                    <li><a rel="nofollow" href="#" class="dropdown-item">
                                            <div class="notification d-flex justify-content-between">
                                                <div class="notification-content"><i class="fa fa-twitter"></i>You have
                                                    2 followers
                                                </div>
                                                <div class="notification-time">
                                                    <small>4 minutes ago</small>
                                                </div>
                                            </div>
                                        </a></li>
                                    <li><a rel="nofollow" href="#" class="dropdown-item">
                                            <div class="notification d-flex justify-content-between">
                                                <div class="notification-content"><i class="fa fa-upload"></i>Server
                                                    Rebooted
                                                </div>
                                                <div class="notification-time">
                                                    <small>4 minutes ago</small>
                                                </div>
                                            </div>
                                        </a></li>
                                    <li><a rel="nofollow" href="#" class="dropdown-item">
                                            <div class="notification d-flex justify-content-between">
                                                <div class="notification-content"><i class="fa fa-twitter"></i>You have
                                                    2 followers
                                                </div>
                                                <div class="notification-time">
                                                    <small>10 minutes ago</small>
                                                </div>
                                            </div>
                                        </a></li>
                                    <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center">
                                            <strong> <i class="fa fa-bell"></i>view all notifications </strong></a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown"><a id="messages" rel="nofollow" data-target="#" href="#"
                                                             data-toggle="dropdown" aria-haspopup="true"
                                                             aria-expanded="false" class="nav-link"><i
                                            class="fa fa-envelope"></i><span class="badge badge-info">10</span></a>
                                <ul aria-labelledby="notifications" class="dropdown-menu">
                                    <li><a rel="nofollow" href="#" class="dropdown-item d-flex">
                                            <div class="msg-profile"><img src="img/avatar-1.jpg" alt="..."
                                                                          class="img-fluid rounded-circle"></div>
                                            <div class="msg-body">
                                                <h3 class="h5">Jason Doe</h3><span>sent you a direct message</span>
                                                <small>3 days ago at 7:58 pm - 10.06.2014</small>
                                            </div>
                                        </a></li>
                                    <li><a rel="nofollow" href="#" class="dropdown-item d-flex">
                                            <div class="msg-profile"><img src="img/avatar-2.jpg" alt="..."
                                                                          class="img-fluid rounded-circle"></div>
                                            <div class="msg-body">
                                                <h3 class="h5">Frank Williams</h3><span>sent you a direct message</span>
                                                <small>3 days ago at 7:58 pm - 10.06.2014</small>
                                            </div>
                                        </a></li>
                                    <li><a rel="nofollow" href="#" class="dropdown-item d-flex">
                                            <div class="msg-profile"><img src="img/avatar-3.jpg" alt="..."
                                                                          class="img-fluid rounded-circle"></div>
                                            <div class="msg-body">
                                                <h3 class="h5">Ashley Wood</h3><span>sent you a direct message</span>
                                                <small>3 days ago at 7:58 pm - 10.06.2014</small>
                                            </div>
                                        </a></li>
                                    <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center">
                                            <strong> <i class="fa fa-envelope"></i>Read all messages </strong></a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a href="login.html" class="nav-link logout">Logout<i
                                            class="fa fa-sign-out"></i></a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <div class="breadcrumb-holder">
            <div class="container-fluid">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Charts</li>
                </ul>
            </div>
        </div>
        <section class="charts">
            <div class="container-fluid">
                <header>
                    <h1 class="h3">Users</h1>
                </header>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header d-flex align-items-center">
                                <h2 class="h5 display">All Users</h2>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-11">

                                        <form class="form-inline" action="/brands" method="post">

                                            {{csrf_field()}}
                                            <div class="form-group">
                                                <label>Brand Name: </label>
                                                <input type="text" name="name" class="form-control"
                                                       placeholder="...">
                                            </div>
                                            <button type="submit" class="btn btn-default btn-success">Submit
                                            </button>
                                        </form>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-11">
                                        <table class="table table-striped">
                                            <thead>
                                            <tr class="active">
                                                <th width="10%">#</th>
                                                <th>Name</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($brands as $brand)
                                                <tr class="active">
                                                    <td width="10%"></td>
                                                    <td>{{$brand->name}}</td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer class="main-footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <p>Your company &copy; 2017-2019</p>
                    </div>
                    <div class="col-sm-6 text-right">
                        <p>Design by <a href="https://bootstrapious.com" class="external">Bootstrapious</a></p>
                        <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
                    </div>
                </div>
            </div>
        </footer>
    </div>
@endsection