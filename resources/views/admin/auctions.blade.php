@extends('admin.layout')
@section('content')

    <section class="charts">
        <div class="container-fluid">
            <header>
                <h1 class="h3">Auctions</h1>
            </header>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header d-flex align-items-center">
                            <h2 class="h5 display">All Auctions</h2>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th width="5%">ID</th>
                                    <th width="15%">Seller</th>
                                    <th>Status</th>
                                    <th>Notes</th>
                                    <th>KM</th>
                                    <th>Bid starts from:</th>
                                    <th width="10%">Active</th>
                                    <th width="10%">Buyer Name</th>
                                    <th width="10%">Delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($cars as $car)
                                    <tr>
                                        <th scope="row"><a href="/cars/{{$car->id}}"> {{$car->id}}</a></th>
                                        <th><a href="/users/{{$car->seller_id}}"> {{$car->seller()->getresults()->name}}</a></th>
                                        <td>{{$car->status}}</td>
                                        <td>{{$car->notes}}</td>
                                        <td>{{$car->km}}</td>
                                        <td>{{$car->first_bid}} $</td>
                                        <td>@if($car->buyer_id == null)Active @else Stoped @endif</td>
                                        <td>@if($car->buyer_id == null)N/A @else {{$car->buyer()->getresults()->name}} @endif</td>
                                        <td>
                                            <button type="button" class="btn btn-danger" data-toggle="modal"
                                                    data-target="#d{{$car->id}}">Delete
                                            </button>
                                        </td>
                                    </tr>
                                    @include('admin.modal',['for'=>'car','id'=>"d{$car->id}",'method'=>'DELETE','action'=>''])
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection