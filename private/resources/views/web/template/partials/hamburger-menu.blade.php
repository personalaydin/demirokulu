<div class="hamburger-menu background-cover text-color-main d-flex d-lg-none align-items-center">
    <div class="h-100 w-100 d-flex flex-column justify-content-between">
        <div class="container py-5 py-xs-10 h-100 d-flex flex-column justify-content-between">
            <div class="px-4 w-100 font-size-16 font-size-sm-16 font-weight-600 text-color-main mb-4">
                @if (getPageByTemplate('demirokulu-nedir'))
                    <a href="{{ getPageByTemplate('demirokulu-nedir')['viewLink'] }}" class="hamburger-menu__link animate animate--fadeIn mt-20" data-animate="fadeInLeft" data-animate-delay="700">
                        {{ (getPageByTemplate('demirokulu-nedir')['title']) }}
                    </a>
                @endif
                @if (getPageByTemplate('sukrozomiyal-teknoloji'))
                <a href="{{ getPageByTemplate('sukrozomiyal-teknoloji')['viewLink'] }}" class="hamburger-menu__link animate animate--fadeIn mt-20" data-animate="fadeInLeft" data-animate-delay="700">
                    {{ (getPageByTemplate('sukrozomiyal-teknoloji')['title']) }}
                </a>
                @endif
                @if (getPageByTemplate('Video'))
                <a href="{{ getPageByTemplate('Video')['viewLink'] }}" class="hamburger-menu__link animate animate--fadeIn mt-20" data-animate="fadeInLeft" data-animate-delay="700">
                    {{ (getPageByTemplate('Video')['title']) }}
                </a>
                @endif
                @if (getPageByTemplate('Katkida-bulunanlar'))
                <a href="{{ getPageByTemplate('Katkida-bulunanlar')['viewLink'] }}" class="hamburger-menu__link animate animate--fadeIn mt-20" data-animate="fadeInLeft" data-animate-delay="700">
                    {{ (getPageByTemplate('Katkida-bulunanlar')['title']) }}
                </a>
                @endif
                @if (getPageByTemplate('Broadcast'))
                <a href="{{ getPageByTemplate('Broadcast')['viewLink'] }}" class="hamburger-menu__link animate animate--fadeIn mt-20" data-animate="fadeInLeft" data-animate-delay="700">
                    {{ (getPageByTemplate('Broadcast')['title']) }}
                </a>
                @endif
                @if (getPageByTemplate('Contact'))
                    <a href="{{ getPageByTemplate('Contact')['viewLink'] }}" class="hamburger-menu__link animate animate--fadeIn mt-20" data-animate="fadeInLeft" data-animate-delay="700">
                        {{ (getPageByTemplate('Contact')['title']) }}
                    </a>
                @endif
                {{-- @if(!Auth::check())
                    <a href="{{ getPageByTemplate('Home')['viewLink'] }}?scroll" class="d-block-mobil-footer hamburger-menu__link animate animate--fadeIn mt-20" data-animate="fadeInLeft" data-animate-delay="700">
                        Üye Ol
                    </a>
                @endif --}}
                

                {{-- @if(Auth::check())
                <div><strong>
                    <a href="javascript:void(0)" id="userDeleteButton" class="hamburger-menu__link animate animate--fadeIn mt-20" data-animate="fadeInLeft" data-animate-delay="700">Üyeliğini Sil</a>
                    <input type="hidden" id="userID" value="{{Auth::User()->id}}">
                </strong>
                </div>
                @endif --}}
            </div>
        </div>
    </div>
</div>