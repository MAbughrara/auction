@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row profile">
            <div class="col-md-3">
                <div class="profile-sidebar">
                    <!-- SIDEBAR USERPIC -->
                    <div class="profile-userpic">
                        <img src="/storage/profile/default.png"
                             class="img-responsive" alt="">
                    </div>
                    <!-- END SIDEBAR USERPIC -->
                    <!-- SIDEBAR USER TITLE -->
                    <div class="profile-usertitle">
                        <div class="profile-usertitle-name">
                            {{$user->name}}
                        </div>
                    </div>
                    <!-- END SIDEBAR USER TITLE -->
                    <!-- SIDEBAR BUTTONS -->
                    @if(!$user->reviewed()->where('creator_id',auth()->id())->get())

                        @unless(auth()->id() == $user->id)
                            <div class="profile-userbuttons">
                                <button type="button" class="btn btn-success btn-sm" data-toggle="modal"
                                        data-target="#addReview">Review
                                </button>
                            </div>
                            @include('users.partials.addReview',['action'=>''])
                        @endunless
                    @else
                        <div class="profile-userbuttons">
                            <button type="button" class="btn btn-success btn-sm" data-toggle="modal"
                                    data-target="#addReview">Edit Review
                            </button>
                        </div>
                    @include('users.partials.addReview',['action'=>'edit'])
                @endif
                <!-- END SIDEBAR BUTTONS -->
                    <!-- SIDEBAR MENU -->
                    <div class="profile-usermenu">
                        <ul class="nav" role="tablist">
                            @include('users.partials.userMenu',['active' => 'active','href' => 'overview','title'=>'Overview','icon'=>'home'])
                            @include('users.partials.userMenu',['active' => '','href' => 'bids','title'=>'Bids','icon'=>'usd'])
                            @if(auth()->id() == $user->id)
                                @include('users.partials.userMenu',['active' => '','href' => 'purchase','title'=>'Purchases','icon'=>'shopping-cart'])
                                @include('users.partials.userMenu',['active' => '','href' => 'account','title'=>'Account Settings','icon'=>'user'])
                            @endif
                        </ul>

                    </div>

                    <!-- END MENU -->
                </div>
            </div>
            <div class="col-md-9">
                <div class="profile-content tab-content">
                    @include('users.partials.tabs.overview')
                    @include('users.partials.tabs.bids')
                    @if(auth()->id() == $user->id)
                        @include('users.partials.tabs.purchases')
                        @include('users.partials.tabs.account')
                    @endif
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
        @if(auth()->id() == $user->id)
        $('#account').find('a').click(function (e) {
            e.preventDefault();
            $(this).tab('account')
        });
        $('#purchase').find('a').click(function (e) {
            e.preventDefault();
            $(this).tab('purchase')
        })
        @endif
    </script>
@endsection
