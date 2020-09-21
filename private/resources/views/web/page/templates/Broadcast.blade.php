

@extends('web.template.layout', [
    'headerClass' => 'header--shrink'
])
@section('content')
<style>
.video-container {
    position: relative;
    padding-bottom: 54.25%;
    height: 0; 
    overflow: hidden;
}
.video-container iframe,
.video-container object,
.video-container embed {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}

#frame {
       width: 420px;
       height: 280px;
      position: absolute;
        }

 .play {z-index: 100}
 .maru {z-index: 1}
</style>
    <div class="bg-video-detail ">
        <div class="container"></div>
    </div>

    <div class="row d-flex align-items-center justify-content-center video-detail-position position-relative">
        <div class="col-6 col-md-6 col-lg-11  ">
            <div class="previous-button text-right">
                @if (isset($prev))
                    <a href="{{$prev->getViewLink()}}">
                        <span class=" font-size-sm-12 font-size-md-13"> <img src="{{asset('/assets/img/icons/polygon-left.png')}}" alt=""> 
                            ÖNCEKİ
                        </span>
                    </a>
                @endif
              
            </div>
        </div>
      
        <div class="col-36 col-lg-26">           
            <div class="flex-video-container  position-relative">
                <div class="video-item ">
                    <div class="video-container img-cover" style="background:url('{{ $row->getImageByTemplate('featured','image') }}')">
                        
                        @if($row->getEmbed())
                            @php ($url=explode('=', $row->getEmbed())[1])
                            @if(strpos($url, '&') !== true)
                                @php ($url=explode('&', $url)[0])
                            @endif
                            <iframe src="https://www.youtube.com/embed/{{$url}}?autoplay=1&controls=0"  allow="autoplay; encrypted-media" allowfullscreen frameborder="0"    ></iframe>
                        @endif
                    </div>

                    {{-- <span class="video-left-bottom-text mt-30"> {{ $row->parents()->first()->getTitle() }}</span> --}}
                    <div class="row">
                        <div class="video-head-text font-size-lg-28 col-lg-36"> {{ $row->getTitle() }} </div>
                    </div>
                    <hr>
                    
                    
                </div>
            </div>
        </div>
        <div class="col-6 col-md-8  col-lg-11">
            <div class="next-button">
                <span class=" font-size-sm-12 font-size-md-13   ">
                    @if (isset($next))
                        <a href="{{$next->getViewLink()}}">SONRAKİ
                            <img src="{{asset('/assets/img/icons/polygon-right.png')}}" alt="">
                        </a>
                    @endif
                </span> 
            </div>
        </div>
       <div class="container"></div>
    </div>  
    
    
    
@endsection
