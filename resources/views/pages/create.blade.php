@extends('layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h1>Add Image</h1>
                {!! Form::open(['route' => 'gallery.store', 'files' => true]) !!}
                    <input type="file" name="image" class="form-control my-3">
                    <button type="submit" class="btn btn-success">Submit</button>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection