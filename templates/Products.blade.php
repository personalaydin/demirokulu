@extends('web.template.layout', [
    'headerClass' => 'header--shrink'
])
@section('content')



    


       <div class="bg-color-4">
        <div class="pt-200 w-lg-70 w-md-130 mr-xs-30 ml-xs-30 ml-sm-30 ml-md-50 ml-lg-160  mb-md-80">
            <div class="wrapper-both-md-x">
                <div class="row">
                    <div class="">
                        <div class="mb-10 ml-20 mb-md-14 mb-lg-14 font-size-sm-50 font-size-30 text-color-dark-blue font-weight-300">
                            {!! theSentence('products', false) !!}
                        </div>
                        <div class="font-size-15 ml-25 mr-30 font-size-md-20 text-color-gray pr-md-100 mr-lg-100 mr-md-30 ml-sm-10  w-md-70">
                            <p>
                                {!! theSentence('products-content', false) !!}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    <div class="px-5 px-sm-20 px-md-5 pl-md-30 pr-md-30 pl-lg-40 pr-lg-40 pl-xl-130 pr-xl-130" >
        <span id="product-1">&nbsp;</span>
        <br>
        <div class="col-md-42 offset-md-3 mt-50 pb-0 bg-issue-2 zindex-2 pt-40 " data-aos="fade-right" >
            <div class="js-slick main-slider slick-carousel--full-height position-relative" >
                <div class="row">
                    <div class=" col-md-42 offset-md-3">
                        <div class="col-38 col-lg-10"  data-aos="fade-right">
                            <a href="{{ getPageByTemplate('Home')['viewLink'] }}" class="header__bottom__logo" title=" ">
                                {{ svg_image('assets/img/cardiom-logo') }}
                            </a>
                        </div>
                        <div class="animate animate--fadeIn position-relative" data-animate="fadeInLeft" data-animate-delay="100" >
                            <div  data-aos="fade-right" class="font-weight-400 font-size-30 font-size-sm-24 font-size-xs-34 font-size-md-35 font-size-lg-45 font-size-xl-50 font-size-xxxl-46 line-height-1-2 text-color-light-blue">
                                {!! theSentence('products-1-title', false) !!}
                            </div>
                            <div  data-aos="fade-right" class="mt-sm-3 mt-xxxl-8">
                                <div class="font-size-14 font-size-sm-15 font-size-lg-14 font-weight-500 mb-5 text-color-white product-text-pad">
                                    {!! theSentence('products-1-content', false) !!}
                                </div>
                                <a href="www.cardiom.com" class="product-button-bottom ml-10 py-2 px-10 py-sm-0 px-sm-0 mt-3 mt-sm-5 mb-md-50 mt-xxxl-10 pl-20 pr-20 mt-30 zoom-sm-8 zoom-1 button button-main--fill font-weight-600 font-size-14 font-size-sm-16 rounded-sm min-width-sm-155 min-height-sm-51  font-weight-900">
                                    www.cardiom.com
                                </a>
                               
                                <div  class="">
                                    <img src="{{asset('/assets/img/product/ekg-cihaz.png')}}" alt="" class="products-image-mal">
                                </div>
                                {{-- <div data-aos="fade-left" class="d-lg-none d-none">
                                    <img src="{{asset('/assets/img/product/ekg-cihaz.png')}}" alt="" class="">
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <span id="product-2">&nbsp;</span>
        <br>
        <div class="col-md-42 offset-md-3 mt-50 pb-0 bg-issue-3 zindex-2 pt-40 pl-xs-40"  data-aos="fade-left" >
            <div class="js-slick main-slider slick-carousel--full-height position-relative" >
                <div class="row">
                    <div class="col-md-42 offset-md-3 ">
                        <div data-aos="fade-left" class="col-38 col-lg-10">
                            <a href="{{ getPageByTemplate('Home')['viewLink'] }}" class="header__bottom__logo" title=" ">
                               <img src="{{asset('/assets/img/logo-without-text.png')}}" alt="" class="w-md-50 w-80 w-lg-85 w-sm-50 w-xs-60">
                            </a>
                        </div>
                        <div class="animate animate--fadeIn" data-animate="fadeInLeft" data-animate-delay="100">
                            <div data-aos="fade-left" class="ml-10 mr-50 mt-30 ml-md-5 font-weight-400 font-size-30 font-size-sm-24 font-size-xs-31 font-size-md-30 font-size-lg-36 font-size-xl-50 font-size-xxxl-46 line-height-1-2 text-color-light-blue">
                                {!! theSentence('products-2-title', false) !!}
                            </div>
                            <div data-aos="fade-left" class="pl-md-5 mt-sm-3 mt-xxxl-8 pr-sm-40 product-button-phone-bottom ">
                                <div class="ml-10 product-text-phone-pad  ml-md-5 products-for-width font-size-14 font-size-sm-14 font-size-lg-14 font-weight-500 mb-5 text-color-white">
                                    {!! theSentence('products-2-content', false) !!}
                                </div>
                                
                                <a href="http://healthcareplatform.DemirOkulu.com.tr/DemirOkulu/Account/Prelogin?returnUrl=/DemirOkulu" target="_blank" class="d-lg-none ml-10 py-2 px-10 py-sm-0 px-sm-0 mt-3 mt-sm-5 mt-xxxl-10  mt-30 zoom-sm-8 zoom-1 button button-main--fill font-weight-600 font-size-13 font-size-sm-14 rounded-sm min-width-sm-155 min-height-sm-51  font-weight-900">
                                    {!! theSentence('health-platform-product-button', false) !!}
                                </a>


                                <div class="row ml-md-0 ml-10 zoom-md-9 zoom-xs-1 zoom-8 ml-xs-5 ml-xxs-5 product-button-phone-bottom ">
                                <a href="http://healthcareplatform.DemirOkulu.com.tr/DemirOkulu/Account/Prelogin?returnUrl=/DemirOkulu" target="_blank" class="d-lg-block d-none p-xs-10 zoom-md-9 zoom-sm-6 zoom-8 button button-main--fill font-weight-600 font-size-14 font-size-sm-16 rounded-sm min-width-sm-155  min-height-sm-51 py-2 px-10 py-sm-0 px-sm-0 mt-3 mt-sm-5 mt-xxxl-10 mt-30" style="min-width: 150px; padding-top: 15px !important;">
                                    {!! theSentence('health-platform-product-button', false) !!}
                                </a>

                                <a href="https://play.google.com/store/apps/details?id=com.DemirOkulu.healthcare" target="_blank" class="p-10 p-xs-10  ml-10 zoom-8 button button-light--blank font-weight-600 font-size-14 font-size-sm-16 rounded-sm min-width-sm-155 min-height-sm-51 py-2 px-10 py-sm-0 px-sm-0 mt-3 mt-sm-5 mt-xxxl-10 animate animate--fadeIn will-be-animate animated fadeInLeft mt-30">
                                    <img src="{{asset('/assets/img/product/google-play-icon.png')}}" >
                                </a>

                                <a href="https://apps.apple.com/us/app/DemirOkulu-healthcare/id1441747584" target="_blank" class="p-10 p-xs-10 ml-10 zoom-8 button button-light--blank font-weight-600 font-size-14 font-size-sm-16 rounded-sm min-width-sm-155 min-height-sm-51 py-2 px-10 py-sm-0 px-sm-0 mt-3 mt-sm-5 mt-xxxl-10 animate animate--fadeIn will-be-animate animated fadeInLeft mt-30">
                                    <img src="{{asset('/assets/img/product/ios-icon.png')}}"> 
                                </a>
                            </div>
                            

                            </div>
                            
                            <div  class="">
                                <img src="{{asset('/assets/img/product/phone.png')}}" alt="" class="product-phone-image d-lg-block">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <span id="product-3">&nbsp;</span>
        <br>
        <div class="col-md-42 offset-md-3 mt-30 pb-60 bg-issue-4 zindex-2 pt-40 pl-xs-40"  data-aos="fade-right" >
            <div class="js-slick main-slider slick-carousel--full-height position-relative" >
                <div class="row">
                    <div class="col-md-42 offset-md-3   mt-15 ">
                        <div data-aos="fade-right" class="col-38 col-lg-10">
                            <a href="{{ getPageByTemplate('Home')['viewLink'] }}" class="header__bottom__logo" title=" ">
                                <img src="{{asset('/assets/img/logo-without-text.png')}}" alt="" class="w-md-35 w-80 w-lg-80 w-sm-40 w-xs-50">
                            </a>
                        </div>
                        <div  class="animate animate--fadeIn" data-animate="fadeInLeft" data-animate-delay="100">
                            <div data-aos="fade-right" class="ml-md-5 ml-10  mt-30 font-weight-400 font-size-28 font-size-sm-24 font-size-xs-34 font-size-md-30 font-size-lg-36 font-size-xl-50 font-size-xxxl-46 line-height-1 text-color-light-blue">
                                {!! theSentence('products-3-title', false) !!}
                            </div>
                            <div data-aos="fade-right" class="pl-md-5 mt-sm-3 mt-xxxl-8">
                                <div class="ml-md-0 ml-10 pt-20 for-width font-size-12 font-size-sm-15 font-size-lg-14 font-weight-500 mb-5 text-color-white">
                                    {!! theSentence('products-3-content', false) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="position-relative bg-color-5 h-px-200 mt--170">
    </div>
    </div>
@endsection
