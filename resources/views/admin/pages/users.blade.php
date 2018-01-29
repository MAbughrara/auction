@extends('admin.layout')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">All Users</div>
        <div class="panel-body">
            <table class="table table-hover">
                <tr class="active">
                    <th width="10%">#</th>
                    <th>Name</th>
                    <th width="10%">Status</th>
                    <th width="10%">Suspend</th>
                    <th width="10%">Delete</th>
                </tr>
                @foreach($users as $user)
                    <tr class="active">
                        <td width="10%">{{$user->id}}</td>
                        <td>{{$user->name}}</td>
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
                    @include('admin.modal',['id'=>"d{$user->id}",'method'=>'DELETE','action'=>''])
                @endforeach

            </table>
        </div>
    </div>
@endsection