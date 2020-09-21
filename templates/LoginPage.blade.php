@extends('web.template.layout', [
    'headerClass' => 'header--shrink'
])
@section('content')

<main>
    <div class="position-relative "></div> 
    <div class="bg-color-5 hero-contact-dekstop ">
            <div class="row justify-content-center align-items-center mb-md-110 pt-85 pt-lg-105 pt-lg-210 ">
                <div class="col-42 col-md-24 col-lg-20 pb-50 pb-lg-0 d-mobil-block offset-lg-2">
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
                {{-- <div class="col-48 col-sm-46 col-md-22 col-lg-24  col-xxl-18 justify-content-center align-items-center hero-login-contact-mobil">     
                    <div class="px-8 py-6 px-xxl-11 py-xxl-8  ">   
                        <form action="{{ route('login') }}" class="js-form-validation-handle font-size-12" method="post" data-ajax-send="false">
                            @csrf
            
                            @include('admin.template.partials.validator-messages', [
                                'class' => 'alert'
                            ])

                            @if(Session::has('registered'))
                            <div class="alert alert-success" style="margin-left: 20%;">
                                Üyeliğiniz hazır. Lütfen giriş yapın.                
                            </div>
                            @endif
                           
                            <div class="row"> 
                                <div class="col-48 col-lg-8"></div>
                                <div class="col-48 col-lg-32">
                                    <h2 class="font-size-md-28 font-size-lg-26 text-center text-color-white ml-auto d-block line-height-1-4 font-weight-500 mb-lg-35">
                                        GİRİŞ YAP
                                    </h2>
                                   
                                    <div class="form-group">
                                        <input name="email" type="email" class="form-control" id="email" placeholder="E-mail"  data-rule-required="true" data-rule-email="true">
                                    </div>
                                    <div class="form-group">
                                        <input name="password" type="password" class="form-control" id="password" maxlength="6" placeholder="Şifre" data-rule-required="true">
                                    </div>
                                   
                                    <div class=" flex-containers text-center justify-content-center align-items-center">
                                        @if (getPageByTemplate('LoginPage'))
                                            <div class="form-group">
                                                <button type="submit" class="mt-30  button  button-opacity border border-bg-white button button-fixed-mobile button-red-500--fill button-button-500--hover font-weight-600 font-size-13 font-size-sm-16 min-width-sm-200 min-height-sm-51 py-2 px-10  py-sm-0 px-sm-0 mt-sm-5 mt-xxxl-30">
                                                    GİRİŞ YAP
                                                </button>
                                            </div>
                                        @endif
                                        
                                       
                                    </div>
                                    <div class="text-center">
                                        <a href="{{ getPageByTemplate('ForgotPassword')['viewLink'] }}" class="text-color-white text-center">
                                            Şifremi Unuttum
                                        </a>
                                    </div>
                                    <div class="col-lg-48  text-center justify-content-center align-items-center">
                                        @if (getPageByTemplate('Home'))
                                            <a href="{{ getPageByTemplate('Home')['viewLink'] }}" class="mt-30  button-opacity  button button-fixed-mobile button-button-500--fill border border-danger text-color-head font-weight-700 font-size-14 mt-15 font-size-sm-16  min-width-sm-155 min-height-sm-51 py-1 px-4  py-sm-0 px-sm-0">
                                                ÜYE OL
                                            </a>
                                        @endif
                                    </div>
                                    @if (getPageByTemplate('ForgotPassword'))
                                    <div class="row mt-10">
                                        <div class="col-48">
                                            <div class="font-weight-600 text-main font-size-16 mb-1">
                                                {!! theSentence('login-forgot-password') !!}
                                            </div>
                
                                            <div class="text-gray-300">
                                                {!! theSentence('login-forgot-password-remember', false, [
                                                    'link' => getPageByTemplate('ForgotPassword')['viewLink']
                                                ]) !!}
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                </div>     
                            </div>  
                        </form>
                    </div>
                </div> --}}
            </div>
            <div class="row position-relative"></div>
</main>
@endsection