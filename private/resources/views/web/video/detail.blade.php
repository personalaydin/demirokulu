

@extends('web.template.layout', [
    'headerClass' => 'header--shrink'
])
@section('content')
<style>
.video-container {
    position: relative;
    padding-bottom: 56.25%;
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

                    {{--  style="background:url('{{ $row->getImageByTemplate('featured','image') }}')"  --}}
                    <div class="video-container">
                        @php ($url=explode('=', $row->getEmbed())[1])
                        @if(strpos($url, '&') !== true)
                            @php ($url=explode('&', $url)[0])
                        @endif
                        <iframe src="https://www.youtube.com/embed/{{$url}}?autoplay=1&controls=0"  allow="autoplay; encrypted-media" allowfullscreen frameborder="0"    ></iframe>
                    </div>

                    {{-- <span class="video-left-bottom-text mt-30"> {{ $row->parents()->first()->getTitle() }}</span> --}}
                    <div class="row align-items-center">
                        <div class="video-head-text col-lg-36">
                            {{ $row->getTitle() }} 
                        </div>
                        <div class="col-lg-12">
                            <div class="doctor-name text-right">
                                {!!  $row->getDoctor()  !!}
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-lg-43">
                            <div class="video-content text-color-black font-weight-400">
                                {!!  $row->getExcerpt()  !!} 
                            </div>
                           
                            <div class="video-date col-lg-12 p-0 font-size-lg-16">
                                @php ($date = explode(" ", $row->created_at)[0])
                                @php ($_date = explode("-", $date))
                                @php ($__date = $_date[2].".".$_date[1].".".$_date[0])
                                <strong>{{$__date}}</strong>
                            </div>
                        </div>
                        
                    </div>
                    <form action="{{ route('web.'.app()->getLocale().'.ajax.askToDoctor') }}" class="contact-form js-form-validation-handle font-size-14" method="post">
                        @honeypot
                        @csrf
                        <div class="alert alert-success d-none"></div>
                        <div class="form__group w-100 field">
                            <input name="askToDoctor" type="text" class=" form-control  form__field"  id="askToDoctor" placeholder="{!! theSentence('contact-name-surname', false) !!}" data-rule-required="true"/>
                            <label for="askToDoctor" class="form__label text-color-head">HEKİME SORU SORMAK İÇİN BU ALANI KULLANABİLİRSİNİZ</label>
                        </div>
                        {{-- <input name="email" type="hidden" class="form-control  form__field"  id="email" value="{{Auth::user()->email}}"/>
                        <input name="first_name" type="hidden" class="form-control  form__field"  id="first_name" value="{{Auth::user()->first_name}}"/>
                        <input name="last_name" type="hidden" class="form-control  form__field"  id="last_name" value="{{Auth::user()->last_name}}"/> --}}
                        <input name="video" type="hidden" class="form-control  form__field"  id="video" value="{{ $row->getTitle() }} "/>
                        <div class="text-right">
                            <button type="submit" id="submit_contact_form_button"  class="mt-25 button border border-danger button-button-500--fill font-weight-600 font-size-13 font-size-sm-16 rounded-sm min-width-sm-120 min-height-sm-45 min-height-xs-35 py-1 px-6  py-sm-0 px-sm-0">{!! textUppercase(theSentence('contact-send')) !!}</button>
                        </div>
                    </form>
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
