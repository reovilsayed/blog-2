@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-7 mb-3">
            <div class="card">
                <img src="{{Voyager::image($post->image)}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{$post->title}}</h5>
                  {!! $post->body !!}
                </div>
              </div>
        </div>


    </div>
</div>
@endsection
