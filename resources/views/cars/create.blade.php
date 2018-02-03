@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">create Auction</div>
                    <div class="panel-body">
                        <form action="/cars" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="model">Car Brand</label>
                                <select class="js-example-basic-single form-control" name="brand_id">
                                    @foreach($brands as $brand)
                                        <option value="{{$brand->id}}">{{$brand->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <hr>
                            <div class="form-group">
                                <label for="km">KM</label>
                                <input name="km" type="number" class="form-control" id="km" placeholder="Km" required>
                            </div>
                            <hr>
                            <label for="status">Car status</label>
                            <select class="js-example-basic-single form-control" name="status">
                                <option value="acceptable">acceptable</option>
                                <option value="good">good</option>
                                <option value="veryGood">very good</option>
                                <option value="excellent">excellent</option>
                            </select>
                            <hr>
                            <div class="form-group">
                                <label for="images">Image</label>
                                <input name="images[]" type="file" id="images" multiple  required >
                                <p class="help-block">Upload multiple Images for the car.</p>
                            </div>
                            <hr>
                            <div class="form-group">
                                <label for="first_bid">Bis start at:</label>
                                <input name="first_bid" type="number" class="form-control" id="first_bid"  required>
                            </div>
                            <hr>
                            <div class="form-group">
                            <label for="status">Made Year</label>
                            <select class="js-example-basic-single form-control" name="year"  required>
                            @foreach(range(1985, 2018) as $number)
                                    <option value="{{$number}}">{{$number}}</option>
                            @endforeach
                            </select>
                            </div>
                            <hr>
                             <div class="form-group">
                                        <label for="dtp_input3" class="col-md-2 control-label">Close Bid At:</label>
                                        <div class="input-group date form_time col-md-5" data-date="" data-date-format="dd-MM-yyyy HH:ii" data-link-field="dtp_input3" data-link-format="dd-MM-yyyy HH:ii">
                                            <input  name="end_date" class="form-control" size="16" type="text" value="" readonly>
                                            <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                                            <span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                                        </div>
                                        <input name="end_date"  type="hidden" id="dtp_input3" value="" /><br/>
                                    </div>
                            <hr>
                            <div class="form-group">
                                <label for="notes">note</label>
                                <textarea name="notes" type="textarea" class="form-control" id="notes"></textarea>
                            </div>
                            <button type="submit" class="btn btn-default">Submit</button>
                        </form>
                      </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $('.form_time').datetimepicker({
            language:  'ar',
            weekStart: 1,
            todayBtn:  1,
            autoclose: 1,
            todayHighlight: 1,
            startView: 1,
            minView: 0,
            maxView: 1,
            forceParse: 0
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.js-example-basic-single').select2();
        });
    </script>
@endsection