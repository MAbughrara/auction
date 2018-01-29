@extends('admin.layout')
@section('content')
    {{--<div class="container">--}}
        <hr>
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                <div class="panel panel-default">
                    <div class="panel-heading">Add Brand</div>
                    <div class="panel-body">
                        <form class="form-inline" action="/brands" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label>Brand Name</label>
                                <input type="text" name="name" class="form-control" placeholder="...">
                            </div>
                            <button type="submit" class="btn btn-default btn-success">Submit</button>
                        </form>
                    </div>
                </div>
                </div>
                <div class="row">
                    <div class="panel panel-default">
                        <div class="panel-heading">All Brands</div>
                        <div class="panel-body">
                            <table class="table table-hover">
                                <tr class="active">
                                    <th width="10%">#</th>
                                    <th>Name</th>
                                </tr>
                                @foreach($brands as $brand)
                                    <tr class="active">
                                        <td width="10%"></td>
                                        <td>{{$brand->name}}</td>
                                    </tr>
                                @endforeach

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    {{--</div>--}}


    <script type="text/javascript">
        $(document).ready(function() {
            $('.js-example-basic-single').select2();
        });
    </script>
@endsection