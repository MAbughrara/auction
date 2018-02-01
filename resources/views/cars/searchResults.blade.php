@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
          @include('cars.partials.search')
            </div>
            <div class="col-md-9">
            @include('cars.partials.gridView')
        </div>
        </div>
    </div>
@endsection