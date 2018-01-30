@extends('layouts.app')

@section('content')
<div class="container">
    @include('cars.partials.homeSlider')
    <div class="row">
        @include('cars.partials.gridView')
    </div>
        @include('cars.partials.ProductCartSlider')
</div>

@endsection
