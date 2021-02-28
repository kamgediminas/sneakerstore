@extends('layouts.app')

@section('content')
<div>
    <div class="content">
        <div class="title m-b-md">
            <h1>What's in store:</h1>
        </div>

        @foreach($sneakers as $sneaker)
        <div class="content">
            <a href="/sneakers/{{ $sneaker->id }}">
                <img class="sneakerIcon" src="/img/item/{{ $sneaker->photo }}" alt="{{ $sneaker->photo }}">
                <p>{{ $sneaker->make }} {{ $sneaker->model }}</p>
            </a>
            <p>${{ $sneaker->price }}</p>
            <p>{{ $sneaker->photo }}</p>
            <form action="/sneakers/{{ $sneaker->id }}" method="POST">
            @csrf
            @method('DELETE')
            <button class="btn btn-sm button-bottom footer-button">DELETE</button>
            </form>
            <hr>
        </div>
        @endforeach
    </div>
</div>
@endsection
