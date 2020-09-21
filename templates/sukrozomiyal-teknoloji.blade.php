@extends('web.template.layout', [
    'headerClass' => 'header--shrink'
])
@section('content')
        <main>
            <div class="container">
                <div class="row d-flex-container">
                    <div class="col-xs-48 col-sm-48 col-md-48 col-lg-30 col-xl-30 ">
                        <div class="">
                            <div class="js-slick main-slider slick-carousel--full-height position-relative" >
                                <div class="text-white">
                                    <div class="container left-image-position">
                                        <div class="animate animate--fadeIn" data-animate="fadeInUp" data-animate-delay="100">
                                            <div class="" data-aos="zoom-in">
                                                <div class="content-text-first ">
                                                    Sukrozomiyal® Demir 
                                                </div>
                                                <img src="{{ asset('assets/img/sukrozomiyal/first-image.png') }}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>                       
                    </div>
                    <div class="col-xs-48  col-sm-48 col-md-48 col-lg-18 col-xl-18 mt-lg-60">
                        <div class="">
                            <div class="js-slick main-slider slick-carousel--full-height position-relative " >
                                <div class="text-white">
                                    <div class="container">
                                        <div class="animate animate--fadeIn" data-animate="fadeInDown" data-animate-delay="100">
                                            <div class="max-width-lg-500  line-height-1-6 text-color-black ">
                                                <div class="content-text-head text-color-head font-head ">
                                                    Oral Demir Takviyeleri ve 
                                                    Sukrozomiyal® demir
                                                </div>                                                   
                                                <p class="line-height-1-6 font-size-16 text-justify">{!! theSentence('sukrozomiyal-6', false) !!} </p> <br>    
                                                <p class="line-height-1-6 font-size-16 text-justify">{!! theSentence('sukrozomiyal-7', false) !!}</p> <br>
                                                <p class="line-height-1-6 font-size-16 text-justify">{!! theSentence('sukrozomiyal-8', false) !!}</p> <br>
                                                <p class="line-height-1-6 font-size-16 text-justify">{!! theSentence('sukrozomiyal-9', false) !!}</p> <br>
                                            </div>                                               
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>   
                    </div>
                </div>
                <div class="row align-items-start offset-lg-5">
                    <div class="col-lg-24 ">
                        <div class="position-relative ">
                            <div class="js-slick main-slider slick-carousel--full-height " >
                                <div class=" background-cover text-white d-flex  mb-50 mt-10">
                                    <div class="container">
                                        <div class="pl-0 pl-sm-0 pl-md-0 pl-lg-10 ">
                                            <div class="animate animate--fadeIn" data-animate="fadeInUp" data-animate-delay="100">
                                                <div class="ml-10 mr-10 ml-sm-20  d-none-mobil " data-aos="zoom-in">
                                                    <img src="{{ asset('assets/img/sukrozomiyal/second-image.png') }}" alt="">
                                                </div>
                                                <div data-animate="fadeInLeft" data-animate-delay="200" class="max-width-lg-500 font-weight-500 font-size-18 font-size-sm-14 font-size-lg-17 line-height-1-6 text-color-black mb-7 mb-lg-0 pt-md-10  pt-10 mt-0 mt-md-10  pl-20 pr-20 pl-md-30  pl-lg-0 pr-lg-30 pr-lg-10">
                                                    <p class="line-height-1-5 font-size-16 text-justify">{!! theSentence('sukrozomiyal-10', false) !!} </p> <br>    
                                                    <p class="line-height-1-5 font-size-16 text-justify">{!! theSentence('sukrozomiyal-11', false) !!}</p> <br>
                                                    <p class="line-height-1-5 font-size-16 text-justify">{!! theSentence('sukrozomiyal-12', false) !!}</p> <br>
                                                    <p class="line-height-1-5 font-size-16 text-justify">{!! theSentence('sukrozomiyal-13', false) !!}</p> <br>
                                                    <p class="line-height-1-5 font-size-16 text-justify">{!! theSentence('sukrozomiyal-14', false) !!}</p> <br>
                                                    <p class="line-height-1-5 font-size-16 text-justify">{!! theSentence('sukrozomiyal-15', false) !!}</p> <br>
                                                    <p class="line-height-1-5 font-size-16 text-justify">{!! theSentence('sukrozomiyal-16', false) !!}</p> <br>
                                                    <p class="line-height-1-5 font-size-16 text-justify">{!! theSentence('sukrozomiyal-17', false) !!}</p> <br>
                                                    <p class="line-height-1-5 font-size-16 text-justify"><strong>Sukrozomiyal&#174; demir bir Pharmanutra teknolojisidir. </strong></p> <br>
                                                </div>
                                                <div class="max-width-lg-500  font-weight-500 font-size-13 font-size-sm-14 font-size-lg-17 line-height-1-6 text-color-black pt-20 ml-lg-100 ml-md-20 d-none-mobil">
                                                    <h4>Referanslar</h4>
                                                    <div class="row mt-20">
                                                        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-12">
                                                            {{-- <a href="/assets/downloads/oral-kullanım-icin-gelistirilmis-yeni-nesil-bir-demir.pdf" download class="lang-style font-size-12 font-weight-900">TR {{ svg_image('assets/img/icons/download') }}</a>
                                                            <a href="/assets/downloads/a-new-generation-iron-for-improving-oral-supplementation.pdf" download class="lang-style font-size-12 font-weight-900 pl-0 pl-md-5 pl-lg-5">EN <i class="fa fa-download font-size-12" aria-hidden="true"></i></a>
                                                        --}}
                                                            <div class="row mt--20 ml-10">
                                                                <div class="mr-30">
                                                                    <a href="{{ asset('assets/downloads/oral-kullanım-icin-gelistirilmis-yeni-nesil-bir-demir.pdf') }}" download  class="lang-style font-size-12 font-weight-900">
                                                                        <div class="row">
                                                                            <div class="mr-10">TR</div>
                                                                            <div class="mt-2"><img src="{{asset('/assets/img/download.jpg')}}" width="12px"></div>
                                                                        </div> 
                                                                    </a>
                                                                </div>
                                                                <div>
                                                                    <a href="{{ asset('assets/downloads/a-new-generation-iron-for-improving-oral-supplementation.pdf') }}" download  class="lang-style font-size-12 font-weight-900">
                                                                        <div class="row">
                                                                            <div class="mr-10">EN</div>
                                                                            <div class="mt-2"><img src="{{asset('/assets/img/download.jpg')}}" width="12px"></div>
                                                                        </div> 
                                                                    </a>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="col-sm-12 col-md-27 col-lg-42">    
                                                            <div class="references__text font-size-11">
                                                                <span class="text-color-head font-weight-600 font-size-11">1-</span>
                                                                <a>
                                                                    G.Ramírez, S;Brilli, E;Tarantino, G; Muñoz,M; Sucrosomial® Iron: A New Generation Iron for Improving Oral Supplementation Pharmaceuticals2018, 11,97; doi:10.3390/ph11040097 
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-10">
                                                        <div class="col-xs-12 col-sm-12 col-md-9  col-lg-8">
                                                            {{-- <a href="assets/downloads/demir-bagirsaklarda-emilim-ve-biyoyararlanim-calismasi.pdf" download class="lang-style font-size-12 font-weight-900">TR <i class="fa fa-download font-size-12" aria-hidden="true"></i></a>
                                                            <a href="assets/downloads/iron-intestinal-absorption-and-bioavailability.pdf" download class="lang-style font-size-12 font-weight-900 pl-0 pl-md-5 pl-lg-5">EN <i class="fa fa-download font-size-12" aria-hidden="true"></i></a> --}}
                                                            <div class="row mt--20 ml-10">
                                                                <div class="mr-30">
                                                                    <a href="{{ asset('assets/downloads/demir-bagirsaklarda-emilim-ve-biyoyararlanim-calismasi.pdf') }}" download  class="lang-style font-size-12 font-weight-900">
                                                                        <div class="row">
                                                                            <div class="mr-10">TR</div>
                                                                            <div class="mt-2"><img src="{{asset('/assets/img/download.jpg')}}" width="12px"></div>
                                                                        </div> 
                                                                    </a>
                                                                </div>
                                                                <div>
                                                                    <a href="{{ asset('assets/downloads/iron-intestinal-absorption-and-bioavailability.pdf') }} " download  class="lang-style font-size-12 font-weight-900">
                                                                        <div class="row">
                                                                            <div class="mr-10">EN</div>
                                                                            <div class="mt-2"><img src="{{asset('/assets/img/download.jpg')}}" width="12px"></div>
                                                                        </div> 
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        
                                                        </div>
                                                        <div class="col-sm-12 col-md-27 col-lg-42">
                                                            <div class="references__text font-size-11">
                                                                <span class="text-color-head font-weight-600 font-size-11">2-</span>
                                                                <a class="mt-10">
                                                                    Fabiano, A.; Brilli, E.; Fogli, S.; Beconcini, D.; Carpi, S.; Tarantino, G.; Zambito, Y. Ex Vivo and in Vivo Study of Sucrosomial® Iron Intestinal Absorption and Bioavailability,  Int. J. Mol. Sci. 2018, 19, 2722; doi:10.3390/ijms19092722 
                                                                </a> 
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row 1 mt-10">
                                                        <div class="col-xs-12 col-sm-12 col-md-9  col-lg-8">
                                                            {{-- <a href="/assets/downloads/demir-eksikligi-olmadan-darbepoetin-alfa-alan-anemik-kanser-hastalarinda-oral-sukrozomal-demir-ve-intravenöz-demir-karsilastirmasi-pilot-calisma.pdf" download class="lang-style font-size-12 font-weight-900">TR <i class="fa fa-download font-size-12" aria-hidden="true"></i></a>
                                                            <a href="/assets/downloads/oral-sucrosomial-iron-versus-intravenous-iron-in-anemic-cancer-patients-without-iron-deficiency-receiving-darbepoetin-alfa-a-pilot-study.pdf" download class="lang-style font-size-12 font-weight-900 pl-0 pl-md-5 pl-lg-5 ">EN <i class="fa fa-download font-size-12" aria-hidden="true"></i></a> --}}
                                                        
                                                         <div class="row mt--20 ml-10">
                                                                <div class="mr-30">
                                                                    <a href="{{ asset('assets/downloads/demir-eksikligi-olmadan-darbepoetin-alfa-alan-anemik-kanser-hastalarinda-oral-sukrozomal-demir-ve-intravenöz-demir-karsilastirmasi-pilot-calisma.pdf') }}" download  class="lang-style font-size-12 font-weight-900">
                                                                        <div class="row">
                                                                            <div class="mr-10">TR</div>
                                                                            <div class="mt-2"><img src="{{asset('/assets/img/download.jpg')}}" width="12px"></div>
                                                                        </div> 
                                                                    </a>
                                                                </div>
                                                                <div>
                                                                    <a href="{{ asset('assets/downloads/oral-sucrosomial-iron-versus-intravenous-iron-in-anemic-cancer-patients-without-iron-deficiency-receiving-darbepoetin-alfa-a-pilot-study.pdf') }}" download  class="lang-style font-size-12 font-weight-900">
                                                                        <div class="row">
                                                                            <div class="mr-10">EN</div>
                                                                            <div class="mt-2"><img src="{{asset('/assets/img/download.jpg')}}" width="12px"></div>
                                                                        </div> 
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        
                                                        </div>
                                                        <div class="col-sm-12 col-md-27 col-lg-42">
                                                            <div class="references__text font-size-11">
                                                                <span class="text-color-head font-weight-600 font-size-11">3-</span>
                                                                <a class="">
                                                                    Mafodda,A; Giuffrida,D; Prestifilippo,A; Azzarello,D; Giannicola,R; Mare,M; Maisano,R; Oral sucrosomial iron versus intravenous iron in anemic cancer patients without iron deficiency receiving darbepoetin alfa: a pilot study
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
                    </div>      
                    <div class="col-lg-22 ml-0 ml-sm-0 ml-md-50 ml-lg-0">
                        <div class="position-relative ">
                            <div class="js-slick main-slider slick-carousel--full-height position-relative d-mobil-block" >
                                <div class=" background-cover text-white d-flex  mb-50 mt-10">
                                    <div class="container">
                                        <div class="pl-0 pl-sm-0 pl-md-0 pl-lg-10 ">
                                            <div class="animate animate--fadeIn" data-animate="fadeInDown" data-animate-delay="150">
                                                <div class="ml-10 mr-10 ml-sm-20 ml-md-50 ml-lg-30" data-aos="zoom-in">
                                                    <img src="{{ asset('assets/img/sukrozomiyal/second-image.png') }}" alt="">
                                                </div>
                                                <div class="max-width-lg-500  font-weight-500 font-size-13 font-size-sm-14 font-size-lg-17 line-height-1-6 text-color-black pt-20 ml-lg-100 d-mobil-block">
                                                    <h4>Referanslar</h4>
                                                    <div class="row mt-20">
                                                        <div class="col-9 col-sm-12 col-md-18 col-lg-12">
                                                            
                                                            <div class="row mt--20">
                                                                <div class="mr-30">
                                                                    
                                                                    <a href="{{ asset('assets/downloads/oral-kullanım-icin-gelistirilmis-yeni-nesil-bir-demir.pdf') }}" download  class="lang-style font-size-12 font-weight-900">
                                                                        <div class="row">
                                                                            <div class="mr-10">TR </div>
                                                                            <div class="mt-2"><img src="{{asset('/assets/img/download.jpg')}}" width="12px"></div>
                                                                        </div> 
                                                                    </a>
                                                                </div>
                                                                <div>
                                                                    <a href="{{ asset('assets/downloads/a-new-generation-iron-for-improving-oral-supplementation.pdf') }} " download  class="lang-style font-size-12 font-weight-900">
                                                                        <div class="row">
                                                                            <div class="mr-10">EN</div>
                                                                            <div class="mt-2"><img src="{{asset('/assets/img/download.jpg')}}" width="12px"></div>
                                                                        </div> 
                                                                    </a>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="col-36"> 
                                                            <div class="references__text font-size-11">
                                                                <span class="text-color-head font-weight-600 font-size-11">1-</span>
                                                                <a>
                                                                    G.Ramírez, S;Brilli, E;Tarantino, G; Muñoz,M; Sucrosomial® Iron: A New Generation Iron for Improving Oral Supplementation Pharmaceuticals2018, 11,97; doi:10.3390/ph11040097 
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-10">
                                                        <div class="col-9 col-sm-12 col-md-18 col-lg-12">
                                                            {{-- <a href="/assets/downloads/demir-bagirsaklarda-emilim-ve-biyoyararlanim-calismasi.pdf" download class="lang-style font-size-12 font-weight-900">TR <i class="fa fa-download font-size-12" aria-hidden="true"></i></a>
                                                            <a href="/assets/downloads/iron-intestinal-absorption-and-bioavailability.pdf" download class="lang-style font-size-12 font-weight-900 pl-5">EN <i class="fa fa-download font-size-12" aria-hidden="true"></i></a>                                     --}}
                                                        
                                                            <div class="row mt--20">
                                                                <div class="mr-30">
                                                                    <a href="{{ asset('assets/downloads/demir-bagirsaklarda-emilim-ve-biyoyararlanim-calismasi.pdf') }}" download  class="lang-style font-size-12 font-weight-900">
                                                                        <div class="row">
                                                                            <div class="mr-10">TR</div>
                                                                            <div class="mt-2"><img src="{{asset('/assets/img/download.jpg')}}" width="12px"></div>
                                                                        </div> 
                                                                    </a>
                                                                </div>
                                                                <div>
                                                                    <a href="{{ asset('assets/downloads/iron-intestinal-absorption-and-bioavailability.pdf') }}" download  class="lang-style font-size-12 font-weight-900">
                                                                        <div class="row">
                                                                            <div class="mr-10">EN</div>
                                                                            <div class="mt-2"><img src="{{asset('/assets/img/download.jpg')}}" width="12px"></div>
                                                                        </div> 
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        
                                                        
                                                        </div>
                                                        <div class="col-36"> 
                                                            <div class="references__text font-size-11">
                                                                <span class="text-color-head font-weight-600 font-size-11">2-</span>
                                                                <a class="pt-10">
                                                                    Fabiano, A.; Brilli, E.; Fogli, S.; Beconcini, D.; Carpi, S.; Tarantino, G.; Zambito, Y. Ex Vivo and in Vivo Study of Sucrosomial® Iron Intestinal Absorption and Bioavailability,  Int. J. Mol. Sci. 2018, 19, 2722; doi:10.3390/ijms19092722 
                                                                </a> 
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="row mt-10">
                                                        <div class="col-9 col-sm-12 col-md-18 col-lg-12">
                                                            {{-- <a href="/assets/downloads/demir-eksikligi-olmadan-darbepoetin-alfa-alan-anemik-kanser-hastalarinda-oral-sukrozomal-demir-ve-intravenöz-demir-karsilastirmasi-pilot-calisma.pdf" download class="lang-style font-size-12 font-weight-900">TR <i class="fa fa-download font-size-12" aria-hidden="true"></i></a>
                                                            <a href="/assets/downloads/oral-sucrosomial-iron-versus-intravenous-iron-in-anemic-cancer-patients-without-iron-deficiency-receiving-darbepoetin-alfa-a-pilot-study.pdf" download class="lang-style font-size-12 font-weight-900 pl-5">EN <i class="fa fa-download font-size-12" aria-hidden="true"></i></a>                                     --}}
                                                            
                                                            <div class="row mt--20">
                                                                <div class="mr-30">
                                                                    <a href="{{ asset('assets/downloads/demir-eksikligi-olmadan-darbepoetin-alfa-alan-anemik-kanser-hastalarinda-oral-sukrozomal-demir-ve-intravenöz-demir-karsilastirmasi-pilot-calisma.pdf') }}" download  class="lang-style font-size-12 font-weight-900">
                                                                        <div class="row">
                                                                            <div class="mr-10">TR</div>
                                                                            <div class="mt-2"><img src="{{asset('/assets/img/download.jpg')}}" width="12px"></div>
                                                                        </div> 
                                                                    </a>
                                                                </div>
                                                                <div>
                                                                    <a href="{{ asset('assets/downloads/oral-sucrosomial-iron-versus-intravenous-iron-in-anemic-cancer-patients-without-iron-deficiency-receiving-darbepoetin-alfa-a-pilot-study.pdf') }}"" download  class="lang-style font-size-12 font-weight-900">
                                                                        <div class="row">
                                                                            <div class="mr-10">EN</div>
                                                                            <div class="mt-2"><img src="{{asset('/assets/img/download.jpg')}}" width="12px"></div>
                                                                        </div> 
                                                                    </a>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="col-36"> 
                                                            <div class="references__text font-size-11">
                                                                <span class="text-color-head font-weight-600 font-size-11">3-</span>
                                                                <a class="pt-10">
                                                                    Mafodda,A; Giuffrida,D; Prestifilippo,A; Azzarello,D; Giannicola,R; Mare,M; Maisano,R; Oral sucrosomial iron versus intravenous iron in anemic cancer patients without iron deficiency receiving darbepoetin alfa: a pilot study
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
                    </div>
                </div>
            </div>
        </main>
@endsection
