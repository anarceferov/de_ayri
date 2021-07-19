@extends('back.layouts.master')
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
            <form action="{{route('dashboard.forms.update' , $form->id)}}" method='post' enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <h3>Name</h3>
                    <input type="text" name='name' class='form-control' value="{{$form->name}}" autofocus>
                </div>

                <div class="form-group">
                    <h3>Email</h3>
                    <input type="text" name='email' class='form-control' value="{{$form->email}}">
                </div>

                <div class="form-group">
                    <h3>Image</h3>
                    <input type="file" name='image' >
                </div>
                <div class='form-group'>
                    <button type='submit' class="btn btn-primary btn-block">SUBMIT</button>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection
