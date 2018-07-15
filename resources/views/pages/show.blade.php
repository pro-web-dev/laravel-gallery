@extends('layout')

@section('content')
    <div class="container">
        <h1 class="text-center mb-3">Show image</h1>
        <div class="row">
            <div class="col-lg-3 col-sm-6 my-2">
                <div class="box">
                    <img src="/img/1.jpg" class="img-thumbnail">
                    <a href="" class="btn btn-info d-block my-2">Show <i class="fa fa-eye"></i></a>
                    <a href="" class="btn btn-warning d-block my-2">Edit <i class="fa fa-edit"></i></a>
                    <a href="" class="btn btn-danger d-block my-2">Delete <i class="fa fa-remove"></i></a>
                </div>
            </div>
        </div>
    </div>
@endsection