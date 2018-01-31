<div class="row ">
    <div class="panel panel-default">
        <div class="panel-heading">LATEST CARS</div>
        <div class="panel-body">
        <div id="carousel-example-generic" class="carousel slide col-sm-9" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                @foreach($cars->take(3) as $key=>$car)
                    <li data-target="#carousel-example-generic" data-slide-to="{{$key}}" class="@if($key==0) active @endif "></li>
                @endforeach
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                @foreach($cars->take(3) as $key=>$car)
                    <div class="item @if($key==0) active @endif ">
                        <img src="{{asset('/storage/'.$car->id.'/0.jpg')}}" class="img-responsive carImage" alt="Responsive image">
                        <div class="carousel-caption">
                            <h2>{{$car->brand->name}} <span class="fa-bold">{{$car->first_bid}}</span></h2>
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
</div></div>
</div>
