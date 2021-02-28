@extends('layouts.app')

@section('content')
<div class="content">
    <div id="photo" class="{{ $sneaker->photo }}">
        <img id="photo2" class="sneakerShow" src="/img/item/{{ $sneaker->photo }}" tag="a">
    </div>
    <br>
    <h4 id="make">{{ $sneaker->make }}</h4>
    <p id="model">{{ $sneaker->model }}</p>
    <p id="price">${{ $sneaker->price }}</p>
    @if($sneaker->gender == 'm')
        <p id="gender">Male</p>
    @endif
    @if($sneaker->gender == 'f')
        <p id="gender">Female</p>
    @endif
    <button class="btn btn-sm button-bottom footer-button" onclick="addToCart()">Add to Cart</button>
    <br>
    <br>
    <br>
    <a href="/sneakers">Back</a>
</div>
@endsection
@section('pagescript')
    <script type="application/javascript" src="/js/cart.js"></script>
@stop