@extends('front.layouts.master')
@section('title', 'Kitabxana')
@section('content')

<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <h2 class="text-center text-success"><strong>KİTABXANA</strong></h2>
        </div>
    </div>
</div>


<div class="container mt-5 mb-5">
    <div class="row card-deck">

        <div class="col-md-4 mb-5" data-aos="zoom-in-up">
            <div class="card shadowby">
                <img class="card-img-top hover-shadow" src="{{asset('img/book.png')}}" alt="Azərbaycan dilinin izahlı lüğəti" style="object-fit:contain;">
                <div class="card-body">
                    <a href="{{asset('pdf/pdf1.pdf')}}" class="text-white" target="_blank"><button class="btn btn-primary btn btn-block">BAX</button></a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-5" data-aos="zoom-in-up">
            <div class="card shadowby">
                <img class="card-img-top hover-shadow" src="{{asset('img/book2.png')}}" alt="Azərbaycan dilinin izahlı lüğəti">
                <div class="card-body">
                    <a href="{{asset('pdf/pdf2.pdf')}}" class="text-white" target="_blank"><button class="btn btn-primary btn btn-block">BAX</button></a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-5" data-aos="zoom-in-up">
            <div class="card shadowby">
                <img class="card-img-top hover-shadow" src="{{asset('img/book3.png')}}" alt="Azərbaycan dilinin izahlı lüğəti">
                <div class="card-body">
                    <a href="{{asset('pdf/pdf3.pdf')}}" class="text-white" target="_blank"><button class="btn btn-primary btn btn-block">BAX</button></a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-5" data-aos="zoom-in-up">
            <div class="card shadowby">
                <img class="card-img-top hover-shadow" src="{{asset('img/book4.png')}}" alt="Azərbaycan dilinin izahlı lüğəti">
                <div class="card-body">
                    <a href="{{asset('pdf/pdf4.pdf')}}" class="text-white" target="_blank"><button class="btn btn-primary btn btn-block">BAX</button></a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-5" data-aos="zoom-in-up">
            <div class="card shadowby ">
                <img class="card-img-top hover-shadow" src="{{asset('img/book5.jpg')}}" alt="Azərbaycan dilinin orfoqrafiya lüğəti" >
                <div class="card-body">
                    <a href="{{asset('pdf/pdf5.pdf')}}" class="text-white" target="_blank"><button class="btn btn-primary btn btn-block">BAX</button></a>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection
@section('js')
@endsection