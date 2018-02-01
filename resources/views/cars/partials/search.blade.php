
        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-heading">create Auction</div>
                <div class="panel-body">
                    <form action="/search" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="model">Car Brand</label>
                            <select class="js-example-basic-single form-control" name="brand_id">
                                <option value="">all</option>
                                @foreach($brands as $brand)
                                    <option value="{{$brand->id}}">{{$brand->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <hr>
                        <div class="form-group">
                            <label for="km">KM</label>
                            <select class="js-example-basic-single form-control" name="km">
                                <option value="">all</option>
                                <option value="20000"><20,000</option>
                                <option value="50000"><50,000</option>
                                <option value="100000"><100,000</option>
                            </select>
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
                        <hr>
                        <div class="form-group">
                            <label for="first_bid">Bis start at:</label>
                            <input name="first_bid" type="number" class="form-control" id="first_bid">
                        </div>
                        <hr>
                        <div class="form-group">
                            <label for="status">Made Year</label>
                            <select class="js-example-basic-single form-control" name="year">
                                @foreach(range(1985, 2018) as $number)
                                    <option value="{{$number}}">{{$number}}</option>
                                @endforeach
                            </select>
                        </div>
                        <hr>
                        <hr>
                        <button type="submit" class="btn btn-default">Search</button>
                    </form>
                </div>
            </div>
        </div>


<script type="text/javascript">
    $(document).ready(function() {
        $('.js-example-basic-single').select2();
    });
</script>