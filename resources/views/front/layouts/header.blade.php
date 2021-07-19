<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta property="og:url" content="https://de-ayri.az/">
        <meta property="og:type" content="website">
        <meta property="og:image" content="{{asset('img/logo2.jpg')}}">
        <meta property="og:title" content="De-ayri.az">
        <meta name="theme-color" content="#000000">
        <meta name="msapplication-TileColor" content="#000000">
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no,shrink-to-fit=no">


        <meta name="title" content="REDAKTORLUQ ,REDAKTƏ,KORREKTƏ,REDAKTOR RƏYİ,SAYT KONTENTLƏRİ,SMM,SEO,REKLAMÇILIQ,CİNQL,SSENARİ,SLOQAN,PR,TƏRCÜMƏ,VİZUAL">
        <meta property="og:description" content="REDAKTORLUQ ,REDAKTƏ,KORREKTƏ,REDAKTOR RƏYİ,SAYT KONTENTLƏRİ,SMM,SEO,REKLAMÇILIQ,CİNQL,SSENARİ,SLOQAN,PR,TƏRCÜMƏ,VİZUAL">
        <meta name="description" content="REDAKTORLUQ ,REDAKTƏ,KORREKTƏ,REDAKTOR RƏYİ,SAYT KONTENTLƏRİ,SMM,SEO,REKLAMÇILIQ,CİNQL,SSENARİ,SLOQAN,PR,TƏRCÜMƏ,VİZUAL">
        <meta name="keywords" content="REDAKTORLUQ ,REDAKTƏ,KORREKTƏ,REDAKTOR RƏYİ,SAYT KONTENTLƏRİ,SMM,SEO,REKLAMÇILIQ,CİNQL,SSENARİ,SLOQAN,PR,TƏRCÜMƏ,VİZUAL">

        <link rel="stylesheet" href="{{mix('css/app.css')}}">
        <link rel="shortcut icon" type="image/png" href="{{asset('img/logo.png')}}">
        <title>@yield('title')</title>
    </head>
<body style="background-color: #ffffff;" >
  <nav class="navbar navbar-expand-lg navbar-dark sticky-top" style="background-color: #253CAC">
    <div class="container">
      <a class="navbar-brand" href="{{route('home')}}">
            <img src="{{asset('img/logo.png')}}" alt="de-ayri.az" width="auto" height="70">
          </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">

          <li class="nav-item dropdown"> 
            <a class="nav-link dropdown-toggle" href="#"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="outline: none !important;"> XİDMƏTLƏR </a>
            <div class="dropdown-menu bg-light" aria-labelledby="navbarDropdown" style="border-radius: 20px;">
              <a class="dropdown-item" href="{{route('home')}}#list-item-1" style="border-radius: 20px;">Redaktorluq</a>
              <a class="dropdown-item" href="{{route('home')}}#list-item-2" style="border-radius: 20px;" >Onlayn</a>
              <a class="dropdown-item" href="{{route('home')}}#list-item-3" style="border-radius: 20px;">Reklamçılıq</a>

              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{route('home')}}#list-item-4" style="border-radius: 20px;">Və Sair</a>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{route('prices')}}">QİYMƏTLƏR</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('library')}}">KİTABXANA</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('blog')}}">BLOG</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link disabled" href="#"><i class="fas fa-phone-volume fa-1x"></i>  +994 55 303 83 34</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  
  
  @section('js')
  
  @endsection