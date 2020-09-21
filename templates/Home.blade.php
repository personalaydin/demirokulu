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
        <div id = "popup" class = "hidden acceptPopupContent">
                <div class="row justify-content-center align-items-center">
                    <div class="col-sm-48 col-lg-48">
                        <div class="popup-wrapper">
                            <div class="popup-content p-10 bg-color-2">
                                <div class="bg-color-5">
                                    <div class="popup-text">
                                        Bu site sağlık mensupları içindir. Sağlık mensubu 
                                        olduğunuzu onaylamak için "Devam" butonuna basınız; eğer sağlık mensubu değilseniz, lütfen "Geri" 
                                        butonuna basınız.
                                    </div>
                                    <div class="row pt-lg-15 pt-5 pt-lg-30 pb-25 pb-lg-60 justify-content-center align-items-center text-center">
                                        <div class="col-48 col-lg-18 ">
                                            <a href="https://www.google.com/"  class="button-opacity  button button-fixed-mobile button-button-500--fill border border-danger text-color-head font-weight-700 font-size-14 mt-15 font-size-sm-16  min-width-sm-155 min-height-sm-51 py-1 px-4  py-sm-0 px-sm-0 ">GERİ</a>
                                        </div>
                                        <div class="col-48 col-lg-18">
                                            <a href="{{ getPageByTemplate('Home')['viewLink'] }}" class="button-opacity  button button-fixed-mobile button-red-500--fill  font-weight-600 font-size-14 font-size-sm-16 mt-15 min-width-sm-155 min-height-sm-51 py-1 px-4  py-sm-0 px-sm-0 " alt="Üye Ol" id="_onceOk">
                                                DEVAM
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
</main>   
@endsection
{{-- @section('content')
       <main>
        <div class="container">
            <div class="row align-items-center mt-md-100 mt-lg-30 py-10 px-0  ">
                <div class="col-xs-48 col-sm-48 col-md-48 col-lg-28 col-xl-30  ml-0 ml-sm-0 ml-lg-0  mt-110 ">
                    <div class="position-relative ">
                        <div class="js-slick main-slider slick-carousel--full-height position-relative" >
                            <div class=" background-cover text-white d-flex  mb-50 mt-10">
                                <div class="container">
                                    <div class="pl-0 pl-sm-0 pl-md-0 pl-lg-10 ">
                                        <div class="animate animate--fadeIn" data-animate="fadeInLeft" data-animate-delay="100">
                                            <div class="ml-10 mr-10 ml-sm-20 ml-md-50 ml-lg-50" data-aos="zoom-in">
                                                <div class="content-text-first ">
                                                    Demir Okulu Nedir? 
                                                </div>
                                                <img src="{{ asset('assets/img/sukrozomiyal/first-image2.png') }}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               
                <div class="col-xs-48  col-sm-48 col-md-48 col-lg-20 col-xl-18 ">
                    <div class="position-relative ">
                        <div class="js-slick main-slider slick-carousel--full-height position-relative " >
                            <div class=" background-cover text-white d-flex  mb-50 mt-10">
                                <div class="container">
                                    <div class="pl-0 pl-sm-0 pl-md-0 pl-lg-10 ">
                                        <div class="animate animate--fadeIn" data-animate="fadeInRight" data-animate-delay="100">
                                            <div class="max-width-lg-500 font-weight-400 font-size-13 font-size-sm-14 font-size-lg-17 line-height-1-6 text-color-black mb-7 mb-lg-0 pt-md-10 pt-lg-10 pt-10 mt-0 mt-md-10 mt-lg-100 mt-lg-40 pl-20 pr-20 pl-md-30 pr-md-50 pl-lg-0 pr-lg-30 pr-lg-10">
                                                <div class="content-text-head text-color-head  ">
                                                   Demir Okulu Nedir?
                                                </div>
                                                <p class="line-height-1-5 font-size-16 font-weight-500">Demir eksikliği ve demir eksikliği anemisi Türkiye’de ve Dünyada önemli bir toplum sağlığı sorunudur. Koruyucu önlemlerin alınması, geniş ölçekli çalışmaların yapılması gerekmektedir. DEMİR OKULU alanında öncü isimleri bir araya getiren, sağlık çalışanlarının demir eksikliği ve demir eksikliği anemisi ile ilgili paylaşımlar yapmalarına destek veren; yeni yaklaşımları Türk hekimlerinin görüşlerine sunan dijital bir platform olarak kurulmuştur. Ayrıca, kadın doğum ve pediatri branşlarında uzman hekimlerimizin mesleki gelişimlerini destekleyecek güncel bilimsel içerikleri videolar ve canlı yayınlar ile  sunmayı hedeflemektedir.</p> 
                                                <br>
                                            </div>                          
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>  
        </div>
       </main>
@endsection --}}
