

@extends('web.template.layout', [
    'headerClass' => 'header--shrink'
])
@section('content')

<main class="pb-80">
    <div>

        {{-- Kategori döngü başlangıç--}}
        @foreach($categories as $category)
        {{-- Kategoriye ait blok başlangıç  --}}
        <div class="row mt-110 pt-50">
            
            {{-- Kategori sayaç tekilse banner solda --}}
            @if ($loop->even)
                <div class="col-24 col-md-30 col-lg-30"></div>
            @endif
            <div class="col-24 col-md-18 col-lg-18">
                <div class="row-line-head">
                    <p class="line-content-text line-content-text--2">
                        {{$category->getTitle()}}
                    </p>
                </div>             
            </div>
            {{-- Kategori sayaç çiftse banner sağda --}}
            @if ($loop->odd)
            <div class="col-24 col-md-30 col-lg-30">
                {{-- <input type="radio">Diğer
                <input type="radio" class="ml-20">Pediatri
                <input type="radio" class="ml-20">Cerrahi --}}
            </div>
            @endif
        </div>
        {{-- Kategoriye ait blok bitiş  --}}


        {{-- Video döngü başlangıç --}}
        @foreach($category->videos->reverse() as $video)
        {{-- Video'ya ait blok başlangıç --}}
        <div class="row">
            <div class="container">
                <div class="js-slick main-slider slick-carousel--full-height" >
                    <div class="">
                        <div class="animate animate--fadeIn" data-animate="fadeInRight" data-animate-delay="100">
                            <div class="col-md-42 col-lg-42 offset-md-3 offset-lg-3 mt-10 pb-0  zindex-2 pt-15 " data-aos="fade-up"> 
                                <div class="flex-video-container js-slick main-slider slick-carousel--full-height position-relative">
                                    <div class="video-item">
                                        <a href="{{$video->getViewLink()}}">
                                        {{-- Veritabanından okunacak öğeler için background image değeri style içine yazılır --}}
                                        <div class="video-image" style="background-image: url({{ $video->getImageByTemplate('featured','image') }});">
                                            <div class="ytvideo">
                                                <span class="playicon"></span>  
                                            </div>
                                        </div>
                                        <div class="video-head-text">
                                            {{$video->getTitle()}}
                                        </div>
                                        <div class="video-content">
                                            {!! $video->getExcerpt()  !!} 
                                        </div>
                                        </a>
                                        <a href="{{ getPageByTemplate('Katkida-bulunanlar')['viewLink'] }}">
                                        <div class="doctor-name">
                                            {{$video->getDoctor()}}
                                        </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        {{-- Video'ya ait blok bitiş --}}
        @endforeach
        {{-- Video döngü bitiş --}}
        @endforeach
        {{-- Kategori döngü bitiş--}}

    </div>
</main>
    
@endsection