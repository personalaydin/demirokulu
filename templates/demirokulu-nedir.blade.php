@extends('web.template.layout', [
    'headerClass' => 'header--shrink'
])



@section('content')
<main >
<div class="home__wrapper w-100">
    <div class=" pt-50 ">
        <div class="row d-flex d-flex-mobile justify-content-between align-items-center mt-100 mt-sm-50 mt-md-70 mt-lg-0">
            <div class="col-48 col-md-42 col-lg-13 offset-md-4 offset-lg-9 pt-lg-70" style="max-width: 370px; width:100%">
                <div class="w-100 d-md-block text-centering  text-color-home " >
                    <h1 class="text-color-head font-weight-700 font-head">
                        Demir Okulu Nedir?
                    </h1>
                    <p class="line-height-1-5 font-weight-500 pt-40 text-align-justify text-style">Demir eksikliği ve demir eksikliği anemisi Türkiye’de ve Dünyada önemli bir toplum sağlığı sorunudur. Koruyucu önlemlerin alınması, geniş ölçekli çalışmaların yapılması gerekmektedir. </p>
<br>
                    <p class="line-height-1-5 font-weight-500 text-align-justify text-style"><span class="font-weight-600">DEMİR OKULU</span> alanında öncü isimleri bir araya getiren, sağlık çalışanlarının demir eksikliği ve demir eksikliği anemisi ile ilgili paylaşımlar yapmalarına destek veren; yeni yaklaşımları Türk hekimlerinin görüşlerine sunan dijital bir platform olarak kurulmuştur. Ayrıca, kadın doğum ve pediatri branşlarında uzman hekimlerimizin mesleki gelişimlerini destekleyecek güncel bilimsel içerikleri videolar ve canlı yayınlar ile  sunmayı hedeflemektedir </p>  
                </div>
            </div>
            <div class="col-md-24 col-lg-24">
                <img src="{{ asset('assets/img/contact/bg-right.png') }}" alt="" class="right-img-desktop">
            </div>
            <img src="{{ asset('assets/img/contact/bg-mobil.png') }}" alt="" class=" col-48 d-block-mobil">
        </div>   
    </div>
</div>
</main>   
@endsection