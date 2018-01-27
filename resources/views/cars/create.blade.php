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
                                <label for="model">Car Model</label>
                                <input name="model" type="text" class="form-control" id="model" placeholder="Model">
                            </div>

                            <div class="form-group">
                                <label for="km">KM</label>
                                <input name="km" type="number" class="form-control" id="km" placeholder="Km">
                            </div>

                            <label for="status">Car status</label>

                            <select class="form-control" name="status">
                                <option value="acceptable">acceptable</option>
                                <option value="good">good</option>
                                <option value="veryGood">very good</option>
                                <option value="excellent">excellent</option>
                            </select>

                            <div class="form-group">
                                <label for="images">Image</label>
                                <input name="images[]" type="file" id="images" multiple >
                                <p class="help-block">Upload multiple Images for the car.</p>
                            </div>
                            <hr>

                            <div class="form-group">
                                <label for="first_bid">Bis start at:</label>
                                <input name="first_bid" type="number" class="form-control" id="first_bid">
                            </div>

                            <div class="form-group">
                                <label for="note">note</label>
                                <textarea name="note" type="textarea" class="form-control" id="note"></textarea>
                            </div>

                            <button type="submit" class="btn btn-default">Submit</button>
                        </form>

                      </div>
                </div>
            </div>
        </div>
    </div>
@endsection