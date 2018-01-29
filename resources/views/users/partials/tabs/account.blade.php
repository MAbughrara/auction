<div role="tabpanel" class="tab-pane" id="account">
    <div>
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

        <button type="submit" class="btn btn-default">Submit</button>
    </form>
    </div>
    <br>
    {{--<div>--}}
        {{--<a href="/users/{{auth()->id()}}/password">--}}
        {{--<button type="button" class="btn btn-success btn-sm" > Change Password</button>--}}
        {{--</a>--}}
    {{--</div>--}}

</div>
