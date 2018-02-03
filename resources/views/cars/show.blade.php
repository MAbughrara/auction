@extends('layouts.app')

@section('content')
    <style>
        .item {
            max-height: 430px !important;
        }

        .bold {
            font-weight: bold;
        }

        .carShow {
            min-height: 800px;
            padding-top: 50px;
        }

    </style>
    <div class="container-fluid carShow">
        <div class="row ">
            <div class="list-group col-xs-12 col-sm-2 col-sm-offset-1 ">
                <a href="#" class="list-group-item active">
                    Seller
                </a>
                <a href="/users/{{$car->seller()->getresults()->id}}" class="list-group-item ">
                    <span class="bold">Name: </span> {{$car->seller()->getresults()->name}}
                </a>
                <a href="#" class="list-group-item ">
                    <span class="bold">Member since: </span> {{$car->seller()->getresults()->created_at->diffForHumans()}}
                </a>
                <a href="#" class="list-group-item ">
                    <span class="bold">Rate: </span> {{round(\App\Review::avg($car->seller()->getresults()->id),1)}}
                    /5
                </a>
                <a href="#" class="list-group-item">
                    <span class="bold">Email: </span> {{$car->seller()->getresults()->email}}
                </a>
                <a href="#" class="list-group-item">
                    <span class="bold">Phone: </span> {{$car->seller()->getresults()->phone}}
                </a>
            </div>

            <div class="col-sm-6">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        @foreach($images as $key=>$image)
                            <li data-target="#carousel-example-generic" data-slide-to="{{$key}}"
                                class="@if($key==0) active @endif "></li>
                        @endforeach
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        @foreach($images as $key=>$image)
                            <div class="item @if($key==0) active @endif ">
                                <img src="{{asset('/storage/'.str_after($image,'public'))}}"
                                     class="img-responsive carImage" alt="Responsive image">
                                <div class="carousel-caption">
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>

            <div class="col-xs-6 col-sm-2 sidebar-offcanvas" id="sidebar">
                <div class="row">
                </div>
                <div class="row">
                    <div class="list-group ">
                        <a href="#" class="list-group-item active">
                            Details
                        </a>
                        <a href="#" class="list-group-item ">
                            <span class="bold">Brand: </span> {{$car->brand->name}}
                        </a>
                        <a href="#" class="list-group-item ">
                            <span class="bold">Status: </span> {{$car->status}}
                        </a>
                        <a href="#" class="list-group-item ">
                            <span class="bold">Year: </span> {{$car->year}}
                        </a>
                        <a href="#" class="list-group-item">
                            <span class="bold">KM: </span> {{$car->km}}
                        </a>
                        <a href="#" class="list-group-item">
                            <span class="bold">Bid starts: </span> {{$car->first_bid}} $
                        </a>
                    </div>
                </div>
                @if(\App\Car::hasBuyer($car))
                <div class="row">
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-danger active">
                            Closed
                        </a>
                        <a href="#" class="list-group-item ">
                            <span class="bold">Buyer: {{$car->buyer()->getresults()->name}}</span>
                            @if(!is_null( $car->lastBid()))
                                <span class="bold lastBid">Price: {{$car->lastBid()->bid_val}}</span>
                            @endif
                        </a>
                    </div>
                </div>
                @else
                <div class="row">
                    <div class="list-group ">
                        <a href="#" class="list-group-item active">
                            Bids
                        </a>
                        <a href="#" class="list-group-item ">
                            <span class="bold">last Bid: </span>
                            @if(!is_null( $car->lastBid()))
                                <span class="bold lastBid">{{$car->lastBid()->bid_val}}</span>
                            @endif
                            <p class="bold">by: </p>
                            @if(!is_null( $car->lastBidder()))
                                <span class="bold lastBidder"> {{$car->lastBidder()->name}}</span>
                            @endif

                            <p class="bold ">
                                @if(!is_null( $car->lastBid()))
                                    <span class="bold lastBidTime"> {{($car->lastBid()->created_at->diffForHumans())}}</span>
                                @endif

                            </p>
                        </a>
                            <a href="#" class="list-group-item ">
                                <button class="btn btn-success" type="button" data-toggle="collapse"
                                        data-target="#collapseExample" aria-expanded="false"
                                        aria-controls="collapseExample">
                                    Place Bid
                                </button>
                                <div class="collapse" id="collapseExample">
                                    <div class="well">
                                        <form class="form-inline" action="/bids/add/{{$car->id}}" method="post">
                                            <div class="form-group">
                                                {{csrf_field()}}
                                                <input name="bid_val" type="number" class="form-control"
                                                       id="exampleInputEmail3" placeholder="raise the Bid">
                                            </div>
                                            <button type="submit" class="btn btn-default">Bid</button>
                                        </form>
                                    </div>
                                </div>
                            </a>
                    </div>
                </div>
                @endif

            </div>
        </div>
    </div>

    <script>
        setInterval(function () {
            $.ajax({
                url: '/bids/getLastBid/{{$car->id}}',
                type: 'GET',
                success: function (response) { // What to do if we succeed
                    $(".lastBid").html(response);
                }
            });

            $.ajax({
                url: '/bids/getLastBidder/{{$car->id}}',
                type: 'GET',
                success: function (response) { // What to do if we succeed
                    $(".lastBidder").html(response);
                }
            });

            $.ajax({
                url: '/bids/getLastBidTime/{{$car->id}}',
                type: 'GET',
                success: function (response) { // What to do if we succeed
                    $(".lastBidTime").html(response);
                }
            });

        }, 1000);

    </script>
@endsection