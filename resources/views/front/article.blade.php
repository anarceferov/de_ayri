@extends('front.layouts.master')
@section('title', $article->title)
@section('content')

<div class="card mb-5 container-fluid pt-5">
  <div class="card-header container border">
    <h2 class="text-center" >{{ $article->title}}</h2>
  </div>
  <img src="{{asset($article->image)}}" alt="{{$article->slug}}" width="100%" height="400px" style="object-fit:contain;" class="card-img-top img_fluid">
  <div class="card-body text-center">
    <div class="card-text">
      {!! $article->content !!}
      <div class="float-right container-fluid mt-5">

        <a target="blank" style="color: #3b5998" href="https://www.facebook.com/sharer/sharer.php?u={{ route('article' ,  $article->slug ) }}" role="button"
          ><i class="fab fa-facebook-f fa-lg"></i
        ></a>

        <a class="ml-3" target="blank" style="color: #55acee" href="https://twitter.com/intent/tweet?url={{ route('article' ,  $article->slug ) }}&text={{$article->title}}" role="button"
          ><i class="fab fa-twitter fa-lg"></i
        ></a>

      </div>
    </div>
  </div>
</div>


@endsection