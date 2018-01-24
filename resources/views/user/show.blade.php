@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row profile">
            <div class="col-md-3">
                <div class="profile-sidebar">
                    <!-- SIDEBAR USERPIC -->
                    <div class="profile-userpic">
                        <img src="http://keenthemes.com/preview/metronic/theme/assets/admin/pages/media/profile/profile_user.jpg"
                             class="img-responsive" alt="">
                    </div>
                    <!-- END SIDEBAR USERPIC -->
                    <!-- SIDEBAR USER TITLE -->
                    <div class="profile-usertitle">
                        <div class="profile-usertitle-name">
                            {{$user[0]->name}}
                        </div>
                    </div>
                    <!-- END SIDEBAR USER TITLE -->
                    <!-- SIDEBAR BUTTONS -->
                    <div class="profile-userbuttons">
                        <button type="button" class="btn btn-success btn-sm">Review</button>
                    </div>
                    <!-- END SIDEBAR BUTTONS -->
                    <!-- SIDEBAR MENU -->
                    <div class="profile-usermenu">
                        <ul class="nav" role="tablist">
                            <li class="active">
                                <a href="#overview" role="tab" data-toggle="tab">
                                    <i class="glyphicon glyphicon-home" role="presentation"></i>
                                    Overview </a>
                            </li>
                            <li>
                                <a href="#bids" role="tab" data-toggle="tab">
                                    <i class="glyphicon glyphicon-usd" role="presentation"></i>
                                    Bids </a>
                            </li>
                            <li>
                                <a href="#account" role="tab" data-toggle="tab">
                                    <i class="glyphicon glyphicon-user" role="presentation"></i>
                                    Account Settings </a>
                            </li>
                        </ul>

                    </div>

                    <!-- END MENU -->
                </div>
            </div>
            <div class="col-md-9">
                <div class="profile-content tab-content">

                    <div role="tabpanel" class="tab-pane active" id="overview">

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="rating-block">
                                    <h4>Average user rating</h4>
                                    <h2 class="bold padding-bottom-7">{{floatval(\App\Review::avg($user[0]->id))}}
                                        <small>/ 5</small>
                                    </h2>
                                    <button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                    </button>
                                    <button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                    </button>
                                    <button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                    </button>
                                    <button type="button" class="btn btn-default btn-grey btn-sm"
                                            aria-label="Left Align">
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                    </button>
                                    <button type="button" class="btn btn-default btn-grey btn-sm"
                                            aria-label="Left Align">
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <h4>Rating breakdown</h4>
                                <div class="pull-left">
                                    <div class="pull-left" style="width:35px; line-height:1;">
                                        <div style="height:9px; margin:5px 0;">5 <span
                                                    class="glyphicon glyphicon-star"></span></div>
                                    </div>
                                    <div class="pull-left" style="width:180px;">
                                        <div class="progress" style="height:9px; margin:8px 0;">
                                            <div class="progress-bar progress-bar-success" role="progressbar"
                                                 aria-valuenow="5" aria-valuemin="0" aria-valuemax="5"
                                                 style="width: 1000%">
                                                <span class="sr-only">80% Complete (danger)</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pull-right" style="margin-left:10px;">1</div>
                                </div>
                                <div class="pull-left">
                                    <div class="pull-left" style="width:35px; line-height:1;">
                                        <div style="height:9px; margin:5px 0;">4 <span
                                                    class="glyphicon glyphicon-star"></span></div>
                                    </div>
                                    <div class="pull-left" style="width:180px;">
                                        <div class="progress" style="height:9px; margin:8px 0;">
                                            <div class="progress-bar progress-bar-primary" role="progressbar"
                                                 aria-valuenow="4" aria-valuemin="0" aria-valuemax="5"
                                                 style="width: 80%">
                                                <span class="sr-only">80% Complete (danger)</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pull-right" style="margin-left:10px;">1</div>
                                </div>
                                <div class="pull-left">
                                    <div class="pull-left" style="width:35px; line-height:1;">
                                        <div style="height:9px; margin:5px 0;">3 <span
                                                    class="glyphicon glyphicon-star"></span></div>
                                    </div>
                                    <div class="pull-left" style="width:180px;">
                                        <div class="progress" style="height:9px; margin:8px 0;">
                                            <div class="progress-bar progress-bar-info" role="progressbar"
                                                 aria-valuenow="3" aria-valuemin="0" aria-valuemax="5"
                                                 style="width: 60%">
                                                <span class="sr-only">80% Complete (danger)</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pull-right" style="margin-left:10px;">0</div>
                                </div>
                                <div class="pull-left">
                                    <div class="pull-left" style="width:35px; line-height:1;">
                                        <div style="height:9px; margin:5px 0;">2 <span
                                                    class="glyphicon glyphicon-star"></span></div>
                                    </div>
                                    <div class="pull-left" style="width:180px;">
                                        <div class="progress" style="height:9px; margin:8px 0;">
                                            <div class="progress-bar progress-bar-warning" role="progressbar"
                                                 aria-valuenow="2" aria-valuemin="0" aria-valuemax="5"
                                                 style="width: 40%">
                                                <span class="sr-only">80% Complete (danger)</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pull-right" style="margin-left:10px;">0</div>
                                </div>
                                <div class="pull-left">
                                    <div class="pull-left" style="width:35px; line-height:1;">
                                        <div style="height:9px; margin:5px 0;">1 <span
                                                    class="glyphicon glyphicon-star"></span></div>
                                    </div>
                                    <div class="pull-left" style="width:180px;">
                                        <div class="progress" style="height:9px; margin:8px 0;">
                                            <div class="progress-bar progress-bar-danger" role="progressbar"
                                                 aria-valuenow="1" aria-valuemin="0" aria-valuemax="5"
                                                 style="width: 1%">
                                                <span class="sr-only">80% Complete (danger)</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pull-right" style="margin-left:10px;">0</div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-7">
                                <hr/>
                                @foreach($reviews as $review)
                                <div class="review-block">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <img src="http://dummyimage.com/60x60/666/ffffff&text=No+Image"
                                                 class="img-rounded">
                                            <div class="review-block-name"><a href="#">{{$review->id}}</a></div>
                                            <div class="review-block-date">January 29, 2016<br/>1 day ago</div>
                                        </div>
                                        <div class="col-sm-9">
                                            @switch($review->rate)
                                                @case(1)
                                                <div class="review-block-rate">
                                                    <button type="button" class="btn btn-warning btn-xs"
                                                            aria-label="Left Align">
                                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                    </button>
                                                    <button type="button" class="btn btn-default btn-grey btn-xs"
                                                            aria-label="Left Align">
                                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                    </button>
                                                    <button type="button" class="btn btn-default btn-grey btn-xs"
                                                            aria-label="Left Align">
                                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                    </button>
                                                    <button type="button" class="btn btn-default btn-grey btn-xs"
                                                            aria-label="Left Align">
                                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                    </button>
                                                    <button type="button" class="btn btn-default btn-grey btn-xs"
                                                            aria-label="Left Align">
                                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                    </button>
                                                </div>
                                                @break
                                                @case(2)
                                                <div class="review-block-rate">
                                                    <button type="button" class="btn btn-warning btn-xs"
                                                            aria-label="Left Align">
                                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                    </button>
                                                    <button type="button" class="btn btn-warning btn-xs"
                                                            aria-label="Left Align">
                                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                    </button>
                                                    <button type="button" class="btn btn-default btn-grey btn-xs"
                                                            aria-label="Left Align">
                                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                    </button>
                                                    <button type="button" class="btn btn-default btn-grey btn-xs"
                                                            aria-label="Left Align">
                                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                    </button>
                                                    <button type="button" class="btn btn-default btn-grey btn-xs"
                                                            aria-label="Left Align">
                                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                    </button>
                                                </div>
                                                @break
                                                @case(3)
                                                <div class="review-block-rate">
                                                    <button type="button" class="btn btn-warning btn-xs"
                                                            aria-label="Left Align">
                                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                    </button>
                                                    <button type="button" class="btn btn-warning btn-xs"
                                                            aria-label="Left Align">
                                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                    </button>
                                                    <button type="button" class="btn btn-warning btn-xs"
                                                            aria-label="Left Align">
                                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                    </button>
                                                    <button type="button" class="btn btn-default btn-grey btn-xs"
                                                            aria-label="Left Align">
                                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                    </button>
                                                    <button type="button" class="btn btn-default btn-grey btn-xs"
                                                            aria-label="Left Align">
                                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                    </button>
                                                </div>
                                                @break
                                                @case(4)
                                                <div class="review-block-rate">
                                                    <button type="button" class="btn btn-warning btn-xs"
                                                            aria-label="Left Align">
                                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                    </button>
                                                    <button type="button" class="btn btn-warning btn-xs"
                                                            aria-label="Left Align">
                                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                    </button>
                                                    <button type="button" class="btn btn-warning btn-xs"
                                                            aria-label="Left Align">
                                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                    </button>
                                                    <button type="button" class="btn btn-warning btn-xs"
                                                            aria-label="Left Align">
                                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                    </button>
                                                    <button type="button" class="btn btn-default btn-grey btn-xs"
                                                            aria-label="Left Align">
                                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                    </button>
                                                </div>
                                                @break
                                                @case(5)
                                                <div class="review-block-rate">
                                                    <button type="button" class="btn btn-warning btn-xs"
                                                            aria-label="Left Align">
                                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                    </button>
                                                    <button type="button" class="btn btn-warning btn-xs"
                                                            aria-label="Left Align">
                                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                    </button>
                                                    <button type="button" class="btn btn-warning btn-xs"
                                                            aria-label="Left Align">
                                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                    </button>
                                                    <button type="button" class="btn btn-warning btn-xs"
                                                            aria-label="Left Align">
                                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                    </button>
                                                    <button type="button" class="btn btn-warning btn-xs"
                                                            aria-label="Left Align">
                                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                    </button>
                                                </div>
                                                @break
                                            @endswitch
                                            <div class="review-block-title"></div>
                                            <div class="review-block-description">{{$review->comment}}
                                            </div>
                                        </div>
                                    </div>
                                    <hr/>
                                </div>
                                    @endforeach
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="bids">...</div>
                    <div role="tabpanel" class="tab-pane" id="account">account settings</div>

                </div>
            </div>
        </div>
    </div>
    <script>
        $("#bids").find("a").click(function (e) {
            e.preventDefault();
            $(this).tab('bids')
        });
        $('#overview').find('a').click(function (e) {
            e.preventDefault();
            $(this).tab('overview')
        });
        $('#account').find('a').click(function (e) {
            e.preventDefault();
            $(this).tab('account')
        })
    </script>
@endsection
