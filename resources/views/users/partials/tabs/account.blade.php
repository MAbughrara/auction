<div role="tabpanel" class="tab-pane" id="account">

    <form method="POST" action="/users/{{auth()->id()}}">
        <input type="hidden" name="_method" value="PUT">
        {{csrf_field()}}
        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <label for="Name">Full Name</label>
            <input type="text" class="form-control" name="name" placeholder="Your Name" value="{{$user->name}}">
            @if ($errors->has('name'))
                <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
            @endif
        </div>
        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label for="EmailAddress">Phone Number</label>
            <input type="text" class="form-control" name="email" placeholder="Your Email Address"
                   value="{{$user->email}}">
            @if ($errors->has('email'))
                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
            @endif
        </div>
        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
            <label for="PhoneNember">Phone Number</label>
            <input type="text" class="form-control" name="phone" placeholder="Your Phone Number"
                   value="{{$user->phone}}">
            @if ($errors->has('phone'))
                <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
            @endif
        </div>

        {{--<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">--}}
        {{--<label for="password">New Password</label>--}}

        {{--<input id="password" type="password" class="form-control" name="password" required>--}}

        {{--@if ($errors->has('password'))--}}
        {{--<span class="help-block">--}}
        {{--<strong>{{ $errors->first('password') }}</strong>--}}
        {{--</span>--}}
        {{--@endif--}}
        {{--</div>--}}

        {{--<div class="form-group">--}}
        {{--<label for="password-confirm">Confirm New Password</label>--}}


        {{--<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>--}}
        {{--</div>--}}
        <button type="submit" class="btn btn-default">Submit</button>
    </form>


</div>
