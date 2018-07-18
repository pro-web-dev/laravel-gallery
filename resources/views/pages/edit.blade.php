@extends('layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-5">
                <h1>Edit Image</h1>
                <img src="/img/1.jpg" class="img-thumbnail w-100">
                {!! Form::open(['route' => ['gallery.edit', 2], 'files' => true, 'method' => 'put']) !!}
                    <input type="file" name="image" class="form-control my-3">
                    <button type="submit" class="btn btn-success">Submit</button>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection