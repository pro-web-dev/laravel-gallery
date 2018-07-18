@extends('layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-5">
                <h1>Edit Image</h1>
                @include('errors')
                <img src="{{ $image->getImage() }}" class="img-thumbnail w-100">
                {!! Form::open([
                    'route' => ['gallery.update', $image->id],
                    'files' => true,
                    'method' => 'put'
                 ]) !!}
                <input type="file" name="image" class="form-control my-3">
                <button type="submit" class="btn btn-success">Submit</button>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection