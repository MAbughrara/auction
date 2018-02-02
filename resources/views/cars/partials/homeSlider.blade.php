    <div class="panel panel-default col-sm-9">
        <div class="panel-heading">BEST OFFER</div>
        <div class="panel-body">
        <div id="carousel-example-generic" class="carousel slide " data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                @foreach($bestOffer as $key=>$car)
                    <li data-target="#carousel-example-generic" data-slide-to="{{$key}}" class="@if($key==0) active @endif "></li>
                @endforeach
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                @foreach($bestOffer as $key=>$car)
                    <div class="item @if($key==0) active @endif ">
                        <img src="{{asset('/storage/'.$car->id.'/0.jpg')}}" class="img-responsive carImage" alt="Responsive image">
                        <div class="carousel-caption">
                            <h2>{{$car->first_bid}}$</h2>
                            <a href="/cars/{{$car->id}}" type="button"
                               class="btn btn-success btn-md ">GET IT</a>
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
    </div>
