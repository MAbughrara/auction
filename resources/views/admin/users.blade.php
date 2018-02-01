@extends('admin.layout')
@section('content')

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

@endsection