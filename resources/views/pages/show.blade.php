@extends('layout')

@section('content')
    <div class="container">
        <h1 class="text-center mb-3">Show image</h1>
        <div class="row justify-content-center">
            <div class="col-12 my-2">
                <img src="/{{ $image ? $image->getImage() : '/img/no-image.png' }}" class="img-thumbnail w-100">
            </div>
        </div>
    </div>
@endsection