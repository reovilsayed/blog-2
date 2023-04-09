@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @foreach ($posts as $post)
        <div class="col-md-3 mb-3">
            <div class="card">
                <a href="{{route('single.post',$post->slug)}}">
                <img src="{{Voyager::image($post->image)}}" class="card-img-top" alt="...">
            </a>
                <div class="card-body">
                  <h5 class="card-title">{{$post->title}}</h5>
                  {!! Str::substr( strip_tags($post->body), 0, 40) !!} <br>
                  <a href="{{route('single.post',$post->slug)}}" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
        </div>
        @endforeach

    </div>
</div>
@endsection
