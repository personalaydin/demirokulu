@extends('web.template.layout', [
    'headerClass' => 'header--shrink'
])
@section('content')

<main>
    <div class="position-relative "></div> 
    <div class="bg-color-5 hero-contact-dekstop hero-contact-mobil">
            <div class="row justify-content-center align-items-center mb-md-110 pt-200 ">
                <div class="col-42 col-md-24 col-lg-24 pb-50 pb-lg-0">
                    <div class="col-lg-24 justify-content-start text-color-home font-size-18 text-left home-text-color">
                        <h1 class="text-color-main text-color font-weight-700">
                            Demir Okulu Nedir?
                        </h1>
                        Demir Okulu; alanında öncü isimleri bir araya getiren, sağlık çalışanlarının demir eksikliği ve demir eksikliği anemisi ile ilgili paylaşımlar yapmalarına destek veren; yeni yaklaşımları Türk hekimlerinin görüşlerine sunan dijital bir platformdur.  
                        <div class="mt-20">
                            @if (getPageByTemplate('demirokulu-nedir'))
                                <a href="{{ getPageByTemplate('demirokulu-nedir')['viewLink'] }}" class="button-opacity  button button-fixed-mobile button-red-500--fill  font-weight-600 font-size-14 font-size-sm-16  min-width-sm-105 min-height-sm-35 py-2 px-3 ">
                                        Detay 
                                </a>
                            @endif 
                        </div>
                    </div>
                </div>
                <div class="col-48 col-sm-46 col-md-22 col-lg-24  col-xxl-18 justify-content-center align-items-center hero-contact-mobil">     
                    <div class="px-8 py-6 px-xxl-11 py-xxl-8  ">   
                        
                        
                        {{-- <form action="{{ route('password.email') }}" class="js-form-validation-handle font-size-12" method="post" data-ajax-send="false">
                            @csrf
                            <div  style="margin-left: 20%;">
                       
                                @include('admin.template.partials.validator-messages', [
                                    'class' => 'alert'
                                ])
                                 </div>
                            <div class="row"> 
                                <div class="col-lg-18"></div>
                                <div class="col-lg-24">
                                    <h2 class="font-size-md-28 text-center  ml-auto d-block  line-height-1-4 text-blue-900 font-weight-700 mb-8">
                                        ŞİFREMİ UNUTTUM
                                    </h2>
                                    <div class="row">
                                        <div class="col-md-48">
                                            <div class="form-group">
                                            
                                                <div class="form-group">
                                                    <input name="email" type="email" class="form-control" id="email" placeholder="E-mail" data-rule-required="true" data-rule-email="true">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" style="width: 100%;" class="mt-30  button  button-opacity border border-bg-white button button-fixed-mobile button-blue-500--fill font-weight-600 font-size-13 font-size-sm-16 min-width-sm-200 min-height-sm-51 py-2 px-10  py-sm-0 px-sm-0 mt-sm-5 mt-xxxl-30">
                                        GÖNDER
                                    </button>                                
                                            
                                </div>
                            </div>
                        </form> --}}

                        <form action="{{ route('password.request') }}" class="js-form-validation-handle font-size-12" method="post" data-ajax-send="false">
                            @csrf
            
                            <input type="hidden" name="token" value="{{ request()->input('token') }}">
            
                            <div class="col-lg-48">
                                <h2 class="font-size-md-28 text-center  ml-auto d-block  line-height-1-4 text-blue-900 font-weight-700 mb-8">
                                    ŞİFRENİ BELİRLE<br><br>
                                </h2>

                            </div>

                            @include('admin.template.partials.validator-messages', [
                                'class' => 'alert'
                            ])
            
                            <div class="row">
                                <div class="col-md-48">
                                    <div class="form-group">
                                        <input name="email" type="email" class="form-control" id="email" placeholder="E-mail" data-rule-required="true" data-rule-email="true" value="{{ request()->input('email') }}">
                                    </div>
                                </div>
                            </div>
            
                            <div class="row">
                                <div class="col-md-24">
                                    <div class="form-group">
                                        <input name="password" type="password" placeholder="Şifre"  class="form-control" id="password" data-rule-required="true" autofocus>
                                    </div>
                                </div>
                                <div class="col-md-24">
                                    <div class="form-group">
                                        <input name="password_confirmation" placeholder="Şifre Tekrar" type="password" class="form-control" id="password_confirmation" data-rule-required="true" data-rule-equalTo="#password" data-msg-equalTo="Lütfen PAROLA alanındaki ile aynı parolayı giriniz.">
                                    </div>
                                </div>
                            </div>
            
                            <button style="width: 100%" type="submit" class="mt-30  button  button-opacity border border-bg-white button button-fixed-mobile button-blue-500--fill font-weight-600 font-size-13 font-size-sm-16 min-width-sm-200 min-height-sm-51 py-2 px-10  py-sm-0 px-sm-0 mt-sm-5 mt-xxxl-30">Onayla</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row position-relative"></div>
</main>
@endsection





