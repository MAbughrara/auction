@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
{{--                            <img src="{{asset('/storage/51/oPjjAXL5Q7eXUPQRc0AvsPPEt5ydPotaqAltpWQp.jpeg')}}">--}}

                            @foreach($images as $key=>$image)
                                <img src="{{asset('/storage/'.$car->id.'/'.$key.'.jpg')}}">
                            @endforeach
                        You are logged in!
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection