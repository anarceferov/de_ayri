@extends('front.layouts.master')
@section('title', 'Blog')
@section('content')

<div class="container">
  <div class="row row-cols-1 row-cols-md-3 g-4 mb-5 mt-5">
    @foreach( $articles as $article)
    <div class="col">
      <div class="card h-100 border border-dark shadow">
        <a href="{{ route('article' ,  $article->slug ) }}" target="blank">
        <div class="card-header">
          <h5><span class="badge badge-pill badge-danger float-left">{{ $article->created_at->diffForHumans() }}</span></h5>

          <div class="float-right">

            <a target="blank" style="color: #3b5998" href="https://www.facebook.com/sharer/sharer.php?u={{ route('article' ,  $article->slug ) }}" role="button"
              ><i class="fab fa-facebook-f fa-lg"></i
            ></a>

            <a class="ml-3" target="blank" style="color: #55acee" href="https://twitter.com/intent/tweet?url={{ route('article' ,  $article->slug ) }}&text={{$article->title}}" role="button"
              ><i class="fab fa-twitter fa-lg"></i
            ></a>

          </div>        

        </div>
        <img src="{{ $article->image }}" class="card-img-top img_fluid" alt="{!! $article->title !!}}" width="100%"  style="max-height:240px"/>
        <div class="card-body">
          <a href="{{ route('article' ,  $article->slug ) }}" target="blank"><h5 class="card-text float-left">{!! Str::limit($article->title , 30) !!}</h5></a>
          <a
          class=" btn-floatingc float-right"
          href="{{ route('article' ,  $article->slug ) }}" target="blank"
          ><i class="far fa-arrow-alt-circle-right text-danger"></i
        ></a></a>
        </div>
      </div>
    </div>
    @endforeach
  </div>
  {{ $articles->links() }}
</div>


@endsection

