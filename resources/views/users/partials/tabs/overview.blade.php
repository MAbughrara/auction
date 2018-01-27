<div role="tabpanel" class="tab-pane active" id="overview">
    @if(\App\User::hasReview($user->id))
        <div class="row">
            <div class="col-sm-6">
                <div class="rating-block">
                    <h4>Average user rating</h4>
                    @php $avg = \App\Review::avg($user->id); $vals = [0,1.5,2.5,3.5,4.5]; $rates = [5,4,3,2,1] @endphp
                    <h2 class="bold padding-bottom-7">{{round($avg,1)}}
                        <small>/ 5</small>
                    </h2>

                    @foreach($vals as $val)
                        @include('users.partials.star',['size'=>'sm','arg'=>$avg,'val'=>$val])
                    @endforeach
                </div>
            </div>
            <div class="col-sm-6">
                <h4>Rating breakdown</h4>
                @foreach($rates as $rate)
                @include('users.partials.rateProgressBar',['rate'=>$rate])
                @endforeach
                {{--<div class="pull-left">--}}
                    {{--@php $star = \App\Review::starsCount($user->id,'5') @endphp--}}
                    {{--<div class="pull-left" style="width:35px; line-height:1;">--}}
                        {{--<div style="height:9px; margin:5px 0;">5 <span--}}
                                    {{--class="glyphicon glyphicon-star"></span></div>--}}
                    {{--</div>--}}
                    {{--<div class="pull-left" style="width:180px;">--}}
                        {{--<div class="progress" style="height:9px; margin:8px 0;">--}}
                            {{--<div class="progress-bar progress-bar-success" role="progressbar"--}}
                                 {{--aria-valuenow="5" aria-valuemin="0" aria-valuemax="5"--}}
                                 {{--@if($star == 0)--}}
                                 {{--style="width: 1%"--}}
                                 {{--@else--}}
                                 {{--style="width: {{\App\Review::starPercent($user->id,"5")}}%"--}}
                                    {{--@endif>--}}
                                {{--<span class="sr-only">80% Complete (danger)</span>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="pull-right"--}}
                         {{--style="margin-left:10px;">{{\App\Review::starsCount("$user->id",'5')}}</div>--}}
                {{--</div>--}}
                {{--<div class="pull-left">--}}
                    {{--@php $star = \App\Review::starsCount("$user->id",'4') @endphp--}}
                    {{--<div class="pull-left" style="width:35px; line-height:1;">--}}
                        {{--<div style="height:9px; margin:5px 0;">4 <span--}}
                                    {{--class="glyphicon glyphicon-star"></span></div>--}}
                    {{--</div>--}}
                    {{--<div class="pull-left" style="width:180px;">--}}
                        {{--<div class="progress" style="height:9px; margin:8px 0;">--}}
                            {{--<div class="progress-bar progress-bar-primary" role="progressbar"--}}
                                 {{--aria-valuenow="4" aria-valuemin="0" aria-valuemax="5"--}}
                                 {{--@if($star == 0)--}}
                                 {{--style="width: 1%"--}}
                                 {{--@else--}}
                                 {{--style="width: {{\App\Review::starPercent($user->id,"4")}}%"--}}
                                    {{--@endif>--}}
                                {{--<span class="sr-only">80% Complete (danger)</span>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="pull-right"--}}
                         {{--style="margin-left:10px;">{{\App\Review::starsCount("$user->id",'4')}}</div>--}}
                {{--</div>--}}
                {{--<div class="pull-left">--}}
                    {{--@php $star = \App\Review::starsCount("$user->id",'3') @endphp--}}
                    {{--<div class="pull-left" style="width:35px; line-height:1;">--}}
                        {{--<div style="height:9px; margin:5px 0;">3 <span--}}
                                    {{--class="glyphicon glyphicon-star"></span></div>--}}
                    {{--</div>--}}
                    {{--<div class="pull-left" style="width:180px;">--}}
                        {{--<div class="progress" style="height:9px; margin:8px 0;">--}}
                            {{--<div class="progress-bar progress-bar-info" role="progressbar"--}}
                                 {{--aria-valuenow="3" aria-valuemin="0" aria-valuemax="5"--}}
                                 {{--@if($star == 0)--}}
                                 {{--style="width: 1%"--}}
                                 {{--@else--}}
                                 {{--style="width: {{\App\Review::starPercent($user->id,"3")}}%"--}}
                                    {{--@endif>--}}
                                {{--<span class="sr-only">80% Complete (danger)</span>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="pull-right"--}}
                         {{--style="margin-left:10px;">{{\App\Review::starsCount("$user->id",'3')}}</div>--}}
                {{--</div>--}}
                {{--<div class="pull-left">--}}
                    {{--@php $star = \App\Review::starsCount("$user->id",'2') @endphp--}}
                    {{--<div class="pull-left" style="width:35px; line-height:1;">--}}
                        {{--<div style="height:9px; margin:5px 0;">2 <span--}}
                                    {{--class="glyphicon glyphicon-star"></span></div>--}}
                    {{--</div>--}}
                    {{--<div class="pull-left" style="width:180px;">--}}
                        {{--<div class="progress" style="height:9px; margin:8px 0;">--}}
                            {{--<div class="progress-bar progress-bar-warning" role="progressbar"--}}
                                 {{--aria-valuenow="2" aria-valuemin="0" aria-valuemax="5"--}}
                                 {{--@if($star == 0)--}}
                                 {{--style="width: 1%"--}}
                                 {{--@else--}}
                                 {{--style="width: {{\App\Review::starPercent($user->id,"2")}}%"--}}
                                    {{--@endif--}}
                            {{-->--}}
                                {{--<span class="sr-only">80% Complete (danger)</span>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="pull-right"--}}
                         {{--style="margin-left:10px;">{{\App\Review::starsCount("$user->id",'2')}}</div>--}}
                {{--</div>--}}
                {{--<div class="pull-left">--}}
                    {{--@php $star = \App\Review::starsCount("$user->id",'1') @endphp--}}
                    {{--<div class="pull-left" style="width:35px; line-height:1;">--}}
                        {{--<div style="height:9px; margin:5px 0;">1 <span--}}
                                    {{--class="glyphicon glyphicon-star"></span></div>--}}
                    {{--</div>--}}
                    {{--<div class="pull-left" style="width:180px;">--}}
                        {{--<div class="progress" style="height:9px; margin:8px 0;">--}}
                            {{--<div class="progress-bar progress-bar-danger" role="progressbar"--}}
                                 {{--aria-valuenow="1" aria-valuemin="0" aria-valuemax="5"--}}
                                 {{--@if($star == 0)--}}
                                 {{--style="width: 1%"--}}
                                 {{--@else--}}
                                 {{--style="width: {{\App\Review::starPercent($user->id,"1")}}%"--}}
                                    {{--@endif--}}
                            {{-->--}}
                                {{--<span class="sr-only">80% Complete (danger)</span>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="pull-right" style="margin-left:10px;">{{$star}}</div>--}}
                {{--</div>--}}
            </div>
        </div>

        <div class="row">
            <div class="col-sm-7">
                <hr/>
                @foreach($user->reviewed()->get() as $review)
                    <div class="review-block">
                        <div class="row">
                            <div class="col-sm-3">
                                <img src="http://dummyimage.com/60x60/666/ffffff&text=No+Image"
                                     class="img-rounded">
                                <div class="review-block-name"><a
                                            href="/users/{{$review->creator_id}}">{{$user->find($review->creator_id)->name}}</a>
                                </div>
                                <div class="review-block-date">{{$review->created_at->toDateString()}}</div>
                            </div>
                            <div class="col-sm-9">
                                @php $rate = $review->rate; $vals = [0,1,2,3,4] @endphp
                                <div class="review-block-rate">
                                    @foreach($vals as $val)
                                        @include('users.partials.star',['size'=>'xs','arg'=>$rate,'val'=>$val])
                                    @endforeach
                                </div>
                                <div class="review-block-title"></div>
                                <br>
                                <div class="review-block-description">{{$review->comment}}
                                </div>
                            </div>
                        </div>
                        <hr/>
                    </div>
                @endforeach
            </div>
        </div>
    @else
        <div class="jumbotron" style="background-color: white">
            <h1>No reviews yet!</h1>
            <p>be the first</p>
            <p><a class="btn btn-primary btn-lg" href="#" role="button">Review</a></p>
        </div>
    @endif
</div>
