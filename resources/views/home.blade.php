@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row ">
    @include('cars.partials.search')
    @include('cars.partials.homeSlider')
    </div>
    <div class="row">
        @include('cars.partials.gridView')
    </div>
        @include('cars.partials.ProductCartSlider')
</div>

@endsection
