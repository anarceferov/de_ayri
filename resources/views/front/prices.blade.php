@extends('front.layouts.master')
@section('title', 'Qiymətlər')
@section('content')
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <h2 class="text-center text-success"><strong>Sözə qiymət biçmək çətin olsa da...</strong></h2>
        </div>
    </div>
</div>

<div class="container mb-5">
    <div class="row">
        <div class="col-md-6  mt-5" data-aos="fade-down-right">
            <h2 class="text-center mb-5 text-primary"><strong>REDAKTORLUQ</strong></h2>
            <div class="card shadowby"> 
                <div class="card-header text-center">
                    <h4>Mətnin həcmi, məzmunu və ən <br> əsası, təmizliyi nəzərə alınaraq:</h4>
                </div>
                <ul class="list-group list-group-flush text-center">
                    <li class="list-group-item">Redaktə: 300 söz 4-10 AZN</li>
                    <li class="list-group-item">Korrektə: 300 söz 2-7 AZN</li>
                    <li class="list-group-item">Redaktor rəyi: 50-150 AZN</li>
                </ul>
            </div>
        </div>

        <div class="col-md-6 mt-5" data-aos="fade-down-left">
            <h2 class="text-center mb-5 text-primary"><strong>ONLAYN</strong></h2>
            <div class="card shadowby"> 
                <div class="card-header text-center">
                    <h4>Həcm, məzmun və üslub nəzərə alınaraq:</h4><br>
                </div>
                <ul class="list-group list-group-flush text-center">
                    <li class="list-group-item">Sayt kontenti: 150-500 AZN</li>
                    <li class="list-group-item">SMM kontenti: 15-25 AZN</li>
                    <li class="list-group-item">SEO kontenti: 50-200 AZN</li>
                </ul>
            </div>
        </div>
    </div>
</div>


<div class="container mb-5">
    <div class="row">
        <div class="col-md-6 mt-5" data-aos="fade-down-right">
            <h2 class="text-center mb-5 text-primary"><strong>REKLAMÇILIQ</strong></h2>
            <div class="card shadowby"> 
                <div class="card-header text-center">
                    <h4>Brendin yaşından və peşəkar <br> yanaşmasından asılı olaraq:</h4>
                </div>
                <ul class="list-group list-group-flush text-center">
                    <li class="list-group-item"> Neyminq: 200-1000 AZN</li>
                    <li class="list-group-item">Sloqan: 200-1000 AZN</li>
                    <li class="list-group-item">Ssenari: 500-2000 AZN</li>
                    <li class="list-group-item mt-1">Cinql: 500-1500 AZN</li>
                </ul>
            </div>
        </div>

        <div class="col-md-6 mt-5" data-aos="fade-down-left">
            <h2 class="text-center mb-5 text-primary"><strong>VƏ SAİRDƏKİLƏR</strong></h2>
            <div class="card shadowby"> 
                <div class="card-header text-center">
                    <h4>Həcmə və məzmuna görə:</h4><br>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item text-center">PR məqalə: 150-500 AZN</li>
                    <li class="list-group-item text-center">Tərcümə: 300 söz 5-20 AZN</li>
                </ul>
                <div class="card-body">
                    <p class="text-center">
                        Vizuallaşdırma: Azad sənətkarlar olan fotoqraf, videoqraf və dizaynerlərimizlə razılaşmaq mümkündür.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
