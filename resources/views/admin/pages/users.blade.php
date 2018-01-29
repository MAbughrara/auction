@extends('admin.layout')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">All Users</div>
        <div class="panel-body">
            <table class="table table-hover">
                <tr class="active">
                    <th width="10%">#</th>
                    <th>Name</th>
                    <th width="10%">Suspend</th>
                    <th width="10%">Delete</th>
                </tr>
                @foreach($users as $user)
                    <tr class="active">
                        <td width="10%">{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>
                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#suspend">Suspend</button>
                            @include('admin.modal',['id'=>'suspend','method'=>'PUT'])
                        </td>
                        <td>
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete">Delete</button>
                            @include('admin.modal',['id'=>'delete','method'=>'DELETE'])
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection