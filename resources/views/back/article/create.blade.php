@extends('back.layouts.master')
@section('title', 'Article Create')
@section('content')


<div class="container pt-5">
    <div class="card shadow border border-primary">
        <div class="card-body">
            @if($errors->any())
            <div class='alert alert-danger'>
            @foreach($errors->all() as $error)
            <li> {{$error}} </li>
            @endforeach
            </div>
            @endif
            <form action="{{route('dashboard.articles.store')}}" method='post' enctype='multipart/form-data'>
                @csrf
                <div class="form-group">
                    <h3>TITLE</h3>
                    <input type="text" name='title' class='form-control' required value="{{old('name')}}" autofocus>
                </div>

                <h3>CONTENT</h3>
                <div class='form-group' style='background-color:white !important;'>
                  <textarea name='content' class='form-control' required rows='16' id="summernote">{!! old('content') !!}</textarea>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlFile1">IMAGE</label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1" name='image' required>
                </div>

                <div class='form-group'>
                    <button type='submit' class="btn btn-primary btn-block">SUBMIT</button>
                </div>

            </form>
        </div>
    </div>
</div>
@section('css')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
@endsection
@section('js')
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script>
$(document).ready(function() {
  $('#summernote').summernote({
      height:500,
    }
  );
});
</script>
@endsection
@endsection