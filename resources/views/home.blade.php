@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row ">
        <div class="col-md-3">
    @include('cars.partials.search')
        </div>
    @include('cars.partials.homeSlider')
    </div>
    <div class="row">
        @include('cars.partials.gridView')
    </div>
        @include('cars.partials.ProductCartSlider')
</div>

@endsection
