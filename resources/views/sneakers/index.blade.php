@extends('layouts.app')


@section('content')

    <div>
        <div class="content">
            <div class="title m-b-md">
                <h1 class="display-4 font-weight-bold">What's in store:</h1>
            </div>

            <div class="orderForm">
                <select class="form-control"  id="orderValue" name="orderValue">
                    <option value="" selected disabled hidden>Order By</option>
                    <option value="/sneakers_ordered/id/desc">Newest to Oldest</option>
                    <option value="/sneakers_ordered/id/asc">Oldest to Newest</option>
                    <option value="/sneakers_ordered/price/asc">Price Low to High</option>
                    <option value="/sneakers_ordered/price/desc">Price High to Low</option>
                    <option value="/sneakers_ordered/model/asc">Model A-Z</option>
                    <option value="/sneakers_ordered/model/desc">Model Z-A</option>
                </select>
                <button class="btn btn-sm button-bottom footer-button" onclick="orderBy()">Order</button>
            </div>
            <div class="container sneakerStoreContainer">
                @for($i = 0; $i < count($sneakers); $i = $i + 1)
                        <div class="col-4">
                            <a href="/sneakers/{{ $sneakers[$i]['id'] }}">
                                <img class="sneakerIcon" src="/img/item/{{ $sneakers[$i]['photo'] }}" alt="{{ $sneakers[$i]['photo']}}">
                                <p>{{ $sneakers[$i]['make']." ".$sneakers[$i]['model'] }}</p>
                            </a>
                            <p>${{ $sneakers[$i]['price'] }}</p>
                        </div>
                @endfor
            </div>
        </div>
    </div>

@endsection
@section('pagescript')
    <script type="application/javascript" src="/js/order.js"></script>
@stop
