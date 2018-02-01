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
                                <div class="saleoffrate">
                                    <b>Live</b>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
      