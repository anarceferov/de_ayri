@extends('back.layouts.master')
@section('content')


<div class="container pt-5">
    <div class="card shadow border border-primary">
        <div class="card-body">
            <form action="{{route('dashboard.forms.store')}}" method='post' enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <h3>Name</h3>
                    <input type="text" name='name' value="{{old('name')}}" autofocus class="form-control @error('name') is-invalid @enderror">

                    @error('name')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <h3>Email</h3>
                    <input type="text" name='email' class="form-control @error('email') is-invalid @enderror" value="{{old('email')}}">
                    @error('email')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <h3>Image</h3>
                    <input type="file" name='image'>
                </div>
                <div class='form-group'>
                    <button type='submit' class="btn btn-primary btn-block">SUBMIT</button>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection