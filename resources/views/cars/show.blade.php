@extends('layouts.app')

@section('content')
    <style>
        .item{
            max-height: 430px !important;
        }
        .bold{
            font-weight: bold;
        }
    </style>
    <div class="container">
        <div class="row">

                    <div class="col-sm-9">

                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                @foreach($images as $key=>$image)
                                <li data-target="#carousel-example-generic" data-slide-to="{{$key}}" class="@if($key==0) active @endif "></li>
                                @endforeach
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                @foreach($images as $key=>$image)
                                <div class="item @if($key==0) active @endif ">
                                    <img src="{{asset('/storage/'.str_after($image,'public'))}}" class="img-responsive carImage" alt="Responsive image">
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


            <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
                <div class="row">
                <div class="list-group col-xs-12 col-sm-12 ">
                    <a href="#" class="list-group-item active">
                        Details
                    </a>
                    <a href="#" class="list-group-item ">
                      <span class="bold">Brand: </span>  {{$car->brand->name}}
                    </a>
                    <a href="#" class="list-group-item">
                        <span>KM: </span> {{$car->km}}
                    </a>
                    <a href="#" class="list-group-item">
                        <span>Bid starts: </span> {{$car->first_bid}} $
                    </a>
                </div>
                </div>
                <div class="row">
                    <div class="list-group col-xs-12 col-sm-12 ">
                        <a href="#" class="list-group-item active">
                           Bids
                        </a>
                        <a href="#" class="list-group-item ">
                            <span class="bold">last Bid: </span>
                            @if(!is_null( $car->lastBid()))
                                {{$car->lastBid()->bid_val}}
                            @endif
                            <p class="bold">by: </p>
                            @if(!is_null( $car->lastBidder()))
                                {{$car->lastBidder()->name}}
                            @endif

                            <p class="bold">
                            @if(!is_null( $car->lastBid()))
                                {{($car->lastBid()->created_at->diffForHumans())}}
                                @endif
                            </p>
                        </a>
                        <a href="#" class="list-group-item ">
                            <button class="btn btn-success" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                Place Bid
                            </button>
                            <div class="collapse" id="collapseExample">
                                <div class="well">
                                    <form class="form-inline" action="/bids/add/{{$car->id}}" method="post">
                                        <div class="form-group">
                                            {{csrf_field()}}
                                            <input  name="bid_val" type="number" class="form-control" id="exampleInputEmail3" placeholder="raise the Bid">
                                        </div>
                                        <button type="submit" class="btn btn-default">Bid</button>
                                    </form>
                                </div>
                            </div>
                        </a>

                    </div>
                </div>
                </div>
        </div>
    </div>
@endsection