@extends('layouts.app')

@section('content')
    <div class="content">
        <div>
            <div class="title m-b-md">
                <h1 class="display-4 font-weight-bold">Shopping Cart</h1>
            </div>
            <p id="cartList"></p>
            <button class="btn btn-sm button-bottom footer-button" onclick="clearCart()">Clear Cart</button>
        </div>
        
    </div>
@endsection
@section('pagescript')
    <script type="application/javascript" src="/js/cartPreview.js"></script>
@stop