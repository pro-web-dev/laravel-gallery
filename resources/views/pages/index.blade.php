@extends('layout')

@section('content')
    <div class="container">
        <h1 class="text-center mb-3">My Gallery</h1>
        <div class="row">
            @foreach($images as $image)
            <div class="col-lg-4 col-sm-6 my-2">
                <div class="box">
                    <img src="{{ $image->getImage() }}" class="img-thumbnail">
                    <a href="{{ route('gallery.show', $image->id) }}" class="btn btn-info d-block my-2">Show <i class="fa fa-eye"></i></a>
                    <a href="{{ route('gallery.edit', $image->id) }}" class="btn btn-warning d-block my-2">Edit <i class="fa fa-edit"></i></a>
                    {{Form::open(['route' => ['gallery.destroy', $image->id], 'method' => 'delete'])}}
                    <button onclick="return confirm('Вы уверены?')" type="submit" class="btn btn-danger my-2 w-100 d-block">
                        Delete <i class="fa fa-remove"></i>
                    </button>
                    {{Form::close()}}
                </div>
            </div>
                @endforeach
        </div>
    </div>
@endsection