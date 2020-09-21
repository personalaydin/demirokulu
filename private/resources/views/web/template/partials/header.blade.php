
<div class="container"></div>
<div class="wrapper-both"><div></div></div>
<div class="wrapper-both-2x"><div></div></div>
<div class="wrapper-both-3x"><div></div></div>
<header class="header-wrapper">
    <div class="container">
        <div class="header {{ $headerClass ?? '' }}">
            <div class="pt-20 header__top wrapper-both d-none d-lg-flex align-items-end justify-content-end align-content-center ">
{{--                 
                @if (!Auth::check())
                    <a href="{{ getPageByTemplate('LoginPage')['viewLink'] }}" class="d-block-shrink mb-10   position-relative button-fixed-mobile font-weight-600 font-size-14 font-size-sm-16 rounded-sm min-width-sm-51 min-height-sm-35">
                        <img src="{{asset('/assets/img/icons/login.png')}}" alt="Giriş Yap">
                    </a>
                @endif
                @if (!Auth::check())
                    <a href="{{ getPageByTemplate('LoginPage')['viewLink'] }}" class="d-block-shrink  text-color-head position-relative button-fixed-mobile font-weight-600 font-size-14 font-size-sm-16 rounded-sm min-width-sm-51 min-height-sm-35  ">
                        GİRİŞ YAP
                    </a>
                @endif  

                @if (Auth::check())
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="exit-link d-block-shrink mb-10 text-color-head position-relative font-weight-600 font-size-14 font-size-sm-16 rounded-sm min-width-sm-51 min-height-sm-35">
                        ÇIKIŞ
                    </a>  
                @endif --}}
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
            <div class="header__bottom wrapper-both d-flex align-items-center justify-content-end mt--70">
                <div class="hamburger-menu-button-wrapper d-lg-none">   
                    <button class="js-hamburger-menu-trigger hamburger hamburger--spin" type="button">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
                <div class="w-100 row no-gutters align-items-center align-items-lg-end">
                    <div class="col-38 col-lg-10">
                        <a href="{{ getPageByTemplate('Home')['viewLink'] }}" class="header__bottom__logo" title="Demir Okulu">
                            <div class="logo-container"></div>
                        </a>
                    </div>
                    <div class="col-10 col-lg-38 text-left">
                        <div class="header__bottom__menu font-size-12 font-size-xl-15 font-weight-600 d-none d-lg-block mr-0 pr-0">
                            @if (getPageByTemplate('Home'))
                                <a href="{{ getPageByTemplate('demirokulu-nedir')['viewLink'] }}" class="header__bottom__menu__item mr-20 menu-item">
                                {{ (getPageByTemplate('demirokulu-nedir')['title']) }}
                                </a>
                            @endif
                            @if (getPageByTemplate('sukrozomiyal-teknoloji'))
                                <a href="{{ getPageByTemplate('sukrozomiyal-teknoloji')['viewLink'] }}" class="header__bottom__menu__item mr-20 menu-item">
                                {{ (getPageByTemplate('sukrozomiyal-teknoloji')['title']) }}
                                </a>
                            @endif
                            {{-- @if(Auth::check())
                                @if (getPageByTemplate('sukrozomiyal-teknoloji'))
                                <a href="{{ getPageByTemplate('sukrozomiyal-teknoloji')['viewLink'] }}" class="header__bottom__menu__item mr-20 menu-item">
                                {{ (getPageByTemplate('sukrozomiyal-teknoloji')['title']) }}
                                </a>
                                @endif
                            @endif --}}
                            @if (getPageByTemplate('Video'))
                            <a href="{{ getPageByTemplate('Video')['viewLink'] }}" class="header__bottom__menu__item mr-20 menu-item">
                                
                                {{ (getPageByTemplate('Video')['title']) }}
                            </a>
                            @endif 
                            @if (getPageByTemplate('Katkida-bulunanlar'))
                                <a href="{{ getPageByTemplate('Katkida-bulunanlar')['viewLink'] }}" class="header__bottom__menu__item mr-20 menu-item">
                                    {{ (getPageByTemplate('Katkida-bulunanlar')['title']) }}
                                </a>
                            @endif                           
                            @if (getPageByTemplate('Broadcast'))
                                <a href="{{ getPageByTemplate('Broadcast')['viewLink'] }}" class="header__bottom__menu__item mr-20 menu-item">
                                    <img src="{{asset('/assets/img/home/live-icon.png')}}" alt="Canlı Yayın">
                                    {{ (getPageByTemplate('Broadcast')['title']) }}
                                </a>
                            @endif  
                            @if (getPageByTemplate('Contact'))
                                <a href="{{ getPageByTemplate('Contact')['viewLink'] }}" class="header__bottom__menu__item menu-item">
                                    {{ (getPageByTemplate('Contact')['title']) }}
                                </a>
                            @endif
                            {{-- @if(Auth::check())
                                <strong>
                                    <a href="javascript:void(0)" id="userDeleteButtonD" class="font-weight-600 font-size-15 text-color-home pl-10">Üyeliğini Sil</a>
                                    <input type="hidden" id="userID" value="{{Auth::User()->id}}">
                                    <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                                </strong>
                            @endif --}}
                        </div>
                        <div class="hamburger-menu-button-wrapper d-lg-none">
                            {{-- <a href="#" target="_blank" style="font-size: 30px; color:#e45b5b; font-weight:500;" class="d-mobil-block mb-10 hidden button-fixed button-fixed-mobile font-weight-600 font-size-14 font-size-sm-16 rounded-sm min-width-sm-155 min-width-md-81 min-height-sm-51 ">
                                ÇIKIŞ
                             </a>
                            <a href="#" target="_blank" style="font-size: 30px; color:#e45b5b; font-weight:500;" class="d-block-shrink mb-10 hidden button-fixed button-fixed-mobile font-weight-600  font-size-sm-16 rounded-sm min-width-sm-80 min-height-sm-51 py-2 px-2 ">
                                <img src="{{asset('/assets/img/icons/login.png')}}" alt="Giriş Yap">
                            </a> --}}
  
                            {{--  @if (!Auth::check())
                            <a href="{{ getPageByTemplate('LoginPage')['viewLink'] }}" class="d-block-shrink mb-10  button-fixed button-fixed-mobile font-weight-600 font-size-14 font-size-sm-16 rounded-sm min-width-sm-51 min-height-sm-35 py-1 px-10  py-sm-0 px-sm-0  mt--30 ">
                                <img src="{{asset('/assets/img/icons/login.png')}}" alt="Giriş Yap">
                            </a>
                        @endif  --}}
                        {{-- @if (!Auth::check())
                            <a href="{{ getPageByTemplate('LoginPage')['viewLink'] }}" class="d-block-shrink  text-color-head button-fixed button-fixed-mobile font-weight-600 font-size-13 font-size-xxs-11 font-size-sm-16 rounded-sm min-width-sm-51 min-height-sm-35  ">
                                GİRİŞ YAP
                            </a>
                        @endif  --}}
{{--  
                            @if (Auth::check())
                                <a href="{{ getPageByTemplate('LoginPage')['viewLink'] }}" class="d-block-shrink mb-10 hidden button-fixed button-fixed-mobile font-weight-600  font-size-sm-16 rounded-sm min-width-sm-80 min-height-sm-51 py-2 px-2 ">
                                    <img src="{{asset('/assets/img/icons/login.png')}}" alt="Giriş Yap">
                                </a>
                            @endif   --}}
            
                            {{-- @if (Auth::check())
                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="exit-link d-block-shrink mb-10  button-fixed  font-weight-600 font-size-14 font-size-sm-16 rounded-sm min-width-sm-51 min-height-sm-35 py-1 px-5  py-sm-0 px-sm-0  mt--30 ">
                                    ÇIKIŞ
                                </a>  
                            @endif   --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
