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
            </div>
        </div>

        <div class="row">
            <div class="col-sm-7">
                <hr/>
                @foreach($user->reviewed()->get() as $review)
                    <div class="review-block">
                        <div class="row">
                            <div class="col-sm-3">
                                <img src="/storage/profile/default.png"
                                     class="img-responsive img-rounded">
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
            <p><a class="btn btn-primary btn-lg" href="#" data-toggle="modal" data-target="#addReview" role="button">Review</a>
            </p>
        </div>
    @endif
</div>
