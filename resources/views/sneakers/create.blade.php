@extends('layouts.app')

@section('content')
<div class="content">
    <h1>Create a new sneaker</h1>
    <form class="insertForm" action="/sneakers" method="POST">
        @csrf
        <label for="make" >Sneaker make:</label>
        <br>
        <input type="text" id="make" name="make" onchange="preview()">
        <br>
        <label for="model">Sneaker model:</label>
        <br>
        <input type="text" id="model" name="model" onchange="preview()">
        <br>
        <label for="price">Sneaker price:</label>
        <br>
        <input type="text" id="price" name="price" onchange="preview()">
        <br>
        <label for="photo">Photo:</label>
        <br>
        <p>
            <select id="form-control" class="form-control" name="photo" id="photo"  onchange="preview()">
                @foreach($items as $item)
                <option value="{{ $item }}">{{ $item }}</option>
                @endforeach
            </select>
        </p>

        <br>
        <img id="sneakerPreviewImage" src="" alt="preview">
        <br>
        <br>
        <p id="previewLine1"> </p>
        <p id="previewLine2"> </p>
        <br>
        <button class="btn btn-sm button-bottom footer-button">Submit</button>
        <br>

    </form>


</div>
@endsection
@section('pagescript')
    <script type="application/javascript" src="/js/preview.js"></script>
@stop