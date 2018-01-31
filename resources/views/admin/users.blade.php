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
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th width="10%">#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th width="10%">Status</th>
                                        <th width="10%">Suspend</th>
                                        <th width="10%">Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($users as $user)
                                        <tr>
                                            <th scope="row">{{$user->id}}</th>
                                            <td>{{$user->name}}</td>
                                            <td>{{$user->email}}</td>
                                            <td>@if($user->status == 1)Active @else Suspended @endif</td>
                                            @if($user->status == 1)
                                                <td>
                                                    <button type="button" class="btn btn-warning" data-toggle="modal"
                                                            data-target="#s{{$user->id}}">Suspend
                                                    </button>
                                                </td>
                                            @else
                                                <td>
                                                    <button type="button" class="btn btn-info" data-toggle="modal"
                                                            data-target="#u{{$user->id}}">unsuspend
                                                    </button>
                                                </td>
                                            @endif
                                            <td>
                                                <button type="button" class="btn btn-danger" data-toggle="modal"
                                                        data-target="#d{{$user->id}}">Delete
                                                </button>
                                            </td>
                                        </tr>
                                        @include('admin.modal',['id'=>"s{$user->id}",'method'=>'PUT','action'=>'suspend'])
                                        @include('admin.modal',['id'=>"u{$user->id}",'method'=>'PUT','action'=>'unsuspend'])
                                        @include('admin.modal',['id'=>"d{$user->id}",'method'=>'DELETE','action'=>''])                                    @endforeach
                                    </tbody>
                                </table>
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