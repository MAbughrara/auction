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
                <div class="list-group">
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
                        <span>Bid starts: </span> {{$car->first_bid}} $$
                    </a>

                </div>
            </div>
        </div>
    </div>
@endsection