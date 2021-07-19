@extends('front.layouts.master')
@section('title', 'Də-ayrı')
@section('content')
<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-chevron-up fa-3x"></i></button>

<div style="overflow: hidden !important;">

    <div class="container pt-5 pb-5" id="list-item-1" >

    <div class="row justify-content-between mb-5 pt-5" id="list-item-1">

        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 d-flex justify-content-center align-self-center" data-aos="fade-right">
            <img src="{{asset('img/img1.jpg')}}" alt="de-ayri.az,REDAKTORLUQ,REDAKTe,KORREKTe,REDAKTOR ReYİ" width="70%" height="auto" style="object-fit:contain;">
        </div>

        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6" data-aos="fade-left">
            <h2 class="text-center"><strong>REDAKTORLUQ</strong></h2>
            
          <div class="row pt-3 mt-5 shadowby roundedby hover-shadow">

            <div class="col-3">
                <i class="fas fa-pencil-alt fa-3x text-center" style="color: #253CAC; "></i>
            </div>

            <div class="mb-3 col-9">
                <h4><strong>REDAKTƏ</strong></h4>
                <h5>Hər mövzuda mətni daş-kəsəkdən təmizləyirik. Mətndə elə gəzirik, izimiz qalmır.</h5>
            </div>

          </div>

          <div class="row pt-3 mt-3 shadowby roundedby hover-shadow">

            <div class="col-3">
                <i class="fas fa-text-height fa-3x" style="color: #253CAC; "></i>
            </div>

            <div class="mb-3 col-9">
                <h4><strong>KORREKTƏ</strong></h4>
                <h5>Defislə tirenin fərqini və yerini bilirik. Nöqtəniz də ‘dırnaq’dan sonra qoyulacaq.</h5>
            </div>

          </div>

          <div class="row pt-3 mt-3 shadowby roundedby hover-shadow">

            <div class="col-3">
                <i class="fas fa-comment-dots fa-3x" style="color: #253CAC; "></i>
            </div>

            <div class="mb-3 col-9">
                <h4><strong>REDAKTOR RƏYİ</strong></h4>
                <h5>Kitabınız Kvant nəzəriyyəsi haqqında deyilsə, ‘kənar göz’ünüz olmağa hazırıq. Kitabın strukturu, formatı, üslubu haqqında tövsiyələr veririk.</h5>
            </div>

          </div>

        </div>

    </div>

    <div class="row justify-content-between mb-5 pt-5 change" id="list-item-2">

        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 " data-aos="fade-right">
            <h2 class="text-center"><strong>ONLAYN</strong></h2>
            
          <div class="row pt-3 mt-5 shadowby roundedby hover-shadow">

            <div class="col-3">
                <i class="fas fa-edit fa-3x text-center" style="color: #253CAC; "></i>
            </div>

            <div class="mb-3 col-9">
                <h4><strong>SAYT KONTENTLƏRİ</strong></h4>
                <h5 class="">Sıfırdan və ya yenidən yazırıq. Saytınız oxunaqlı olacaq.</h5>
            </div>

          </div>

          <div class="row pt-3 mt-3 shadowby roundedby hover-shadow">

            <div class="col-3">
                <i class="fas fa-users fa-3x" style="color: #253CAC; "></i>
            </div>

            <div class="mb-3 col-9">
                <h4><strong>SMM</strong></h4>
                <h5>Sosial medianın gücünü görmək üçün onun içində olmaq lazımdır. Biz maraqlı kontentlərlə sizə kömək edə bilərik.</h5>
            </div>

          </div>

          <div class="row pt-3 mt-3 shadowby roundedby hover-shadow">

            <div class="col-3">
                <i class="fas fa-search fa-3x" style="color: #253CAC; "></i>
            </div>

            <div class="mb-3 col-9">
                <h4><strong>SEO</strong></h4>
                <h5>Axtarış sistemlərinin saytınızı birinci tapması üçün sehirli sözlər bilirik. Siz sadəcə saytınızı nişan verin.</h5>
            </div>

          </div>

        </div>

        <div class=" col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 order-first order-md-2 d-flex justify-content-center align-self-center mt-5" data-aos="fade-left">
            <img src="{{asset('img/img2.jpg')}}" alt="de-ayri.az,SAYT KONTENTLeRİ,SMM,SEO" width="75%" height="auto" style="object-fit:contain;">
        </div>

    </div>

    <div class="row justify-content-between mb-5 pt-5" id="list-item-3">

        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 justify-content-center d-flex align-self-center" data-aos="fade-right">
            <img src="{{asset('img/img3.jpg')}}" alt="de-ayri.az,REKLAMcILIQ,NEYMİNQ,CİNQL,SSENARİ,SLOQAN" width="75%" height="auto" style="object-fit:contain;">
        </div>

        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6" data-aos="fade-left">
            <h2 class="text-center"><strong>REKLAMÇILIQ</strong></h2>
            
          <div class="row pt-3 mt-5 shadowby roundedby hover-shadow">

            <div class="col-3">
                <i class="fas fa-text-height fa-3x text-center" style="color: #253CAC; "></i>
            </div>

            <div class="mb-3 col-9">
                <h4><strong>NEYMİNQ</strong></h4>
                <h5 class="">Brendə adı biz veririk, yaşına marketoloqlar cavabdehdir.Orijinal ad qoyub, rəqiblərə od qoyuruq.</h5>
            </div>

          </div>

          <div class="row pt-3 mt-3 shadowby roundedby hover-shadow">

            <div class="col-3">
                <i class="fas fa-music fa-3x" style="color: #253CAC; "></i>
            </div>

            <div class="mb-3 col-9">
                <h4><strong>CİNQL</strong></h4>
                <h5>Dillər əzbəri cinqllar yazırıq. Hamı sizin mahnınızı oxuyacaq!</h5>
            </div>

          </div>

          <div class="row pt-3 mt-3 shadowby roundedby hover-shadow">

            <div class="col-3">
                <i class="fas fa-video fa-3x" style="color: #253CAC; "></i>
            </div>

            <div class="mb-3 col-9">
                <h4><strong>SSENARİ</strong></h4>
                <h5>Televiziya və radio reklamları üçün ssenarilər yazırıq.</h5>
            </div>

          </div>

          <div class="row pt-3 mt-3 shadowby roundedby hover-shadow">

            <div class="col-3">
                <i class="fas fa-comment-dots fa-3x" style="color: #253CAC; "></i>
            </div>

            <div class="mb-3 col-9">
                <h4><strong>SLOQAN</strong></h4>
                <h5>Sloqan vaxtında və yerində deyilən sözdür. Deyəniyik.</h5>
            </div>

          </div>

        </div>

    </div>

    <div class="row justify-content-between mb-5 pt-5" id="list-item-4">

        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6" data-aos="fade-right">
            <h2 class="text-center"><strong>VƏ SAİR</strong></h2>
            
          <div class="row pt-3 mt-5 shadowby roundedby hover-shadow">

            <div class="col-3">
                <i class="fab fa-youtube fa-3x text-center" style="color: #253CAC; "></i>
            </div>

            <div class="mb-3 col-9">
                <h4><strong>PR</strong></h4>
                <h5>Məhsul və ya xidmət haqqında diqqətçəkici materiallar hazırlayırıq. Oxuyan qayıdıb bir də oxuyur.</h5>
            </div>

          </div>

          <div class="row pt-3 mt-3 shadowby roundedby hover-shadow">

            <div class="col-3">
                <i class="fas fa-file-alt fa-3x" style="color: #253CAC; "></i>
            </div>

            <div class="mb-3 col-9">
                <h4><strong>TƏRCÜMƏ</strong></h4>
                <h5>Türk, rus, fransız, ingilis və rumıncanı Vaqin şirin dilinə çeviririk. Tərcümələrimizi də özümüz redaktə edirik.</h5>
            </div>

          </div>

          <div class="row pt-3 mt-3 shadowby roundedby hover-shadow">

            <div class="col-3">
                <i class="fas fa-image fa-3x" style="color: #253CAC; "></i>
            </div>

            <div class="mb-3 col-9">
                <h4><strong>VİZUAL</strong></h4>
                <h5>Mətni yetərsiz sayanlar üçün fotoqraf, videoqraf və dizaynerimiz də var. Bu köməkçi vasitələr sizin işinizi həm də baxımlı edəcək.</h5>
            </div>

          </div>

        </div>

        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 order-first order-md-2 d-flex justify-content-center align-self-center mt-5" data-aos="fade-left">
            <img src="{{asset('img/img4.jpg')}}" alt="de-ayri.az,PR,tercume,VİZUAL" width="75%" height="auto" style="object-fit:contain;">
        </div>

    </div>

    </div>
</div>




@endsection

@section('js')
<script>
    var mybutton = document.getElementById("myBtn");
    
    window.onscroll = function() {scrollFunction()};
    
    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
      } else {
        mybutton.style.display = "none";
      }
    }
    
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
    </script>

@endsection