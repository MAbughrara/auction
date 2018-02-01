            <div class="panel panel-default">
                <div class="panel-heading">LATEST CARS</div>
                <div class="panel-body">
                    @foreach($cars as $car)
                        <div class="col-xs-18 col-sm-6 col-md-4 car-col">
                            <div class="productbox">
                                <div class="imgthumb img-responsive car-img-responsive">
                                    <img src="{{asset('/storage/'.$car->id.'/0.jpg')}}">
                                </div>
                                <div class="caption">
                                    <h5>{{$car->brand->name}}</h5>
                                    <b class="finalprice">${{$car->first_bid}}</b> Bid <b>starts from</b>
                                    <p>
                                        <a href="/cars/{{$car->id}}" type="button"
                                           class="btn btn-success btn-md btn-block">Details</a>
                                    </p>
                                </div>

                                   @if( \Carbon\Carbon::parse($car->end_date)->isPast())
                                        <div class="saleoffrate" style=" background-color: rgba(200, 21, 1, 0.8)">
                                        <b> Close</b>
                                        </div>
                                    @else
                                    <div class="saleoffrate" style=" background-color: rgba(76, 174, 76, 0.8)">
                                    <b>Live</b>
                                    </div>

                                @endif

                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
      