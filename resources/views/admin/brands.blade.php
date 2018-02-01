@extends('admin.layout')
@section('content')

        <section class="charts">
            <div class="container-fluid">
                <header>
                    <h1 class="h3">Users</h1>
                </header>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header d-flex align-items-center">
                                <h2 class="h5 display">All Users</h2>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-11">

                                        <form class="form-inline" action="/brands" method="post">

                                            {{csrf_field()}}
                                            <div class="form-group">
                                                <label>Brand Name: </label>
                                                <input type="text" name="name" class="form-control"
                                                       placeholder="...">
                                            </div>
                                            <button type="submit" class="btn btn-default btn-success">Submit
                                            </button>
                                        </form>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-11">
                                        <table class="table table-striped">
                                            <thead>
                                            <tr class="active">
                                                <th width="10%">#</th>
                                                <th>Name</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($brands as $brand)
                                                <tr class="active">
                                                    <td width="10%"></td>
                                                    <td>{{$brand->name}}</td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

@endsection