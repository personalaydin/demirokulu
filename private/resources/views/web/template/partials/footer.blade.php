<footer class="border-top bg-color-5 border-danger ">
    <div class="footer__wrapper ">
       <div class="row footer__centering">
            <div class="col-48 col-xs-48 col-sm-48 col-md-24 col-lg-24">
                {{-- <h6 class="">E-Bülten</h6> --}}
               <div class="d-block-desktop-footer ">
                    <p class="w-70"> Bu site <strong>Genveon</strong> İlaç firmasının koşulsuz katkılarıyla hazırlanmıştır.
                        Bu sitenin tüm hakları <strong>Genveon İlaç</strong>’a aittir. 
                        Site ile ilgili tüm soru ve görüşleriniz için iletişim bölümünden site sorumlusuna ulaşabilirsiniz.
                         {{-- @if(Auth::check())
                        <br><br><br><strong>
                            <a href="javascript:void(0)" id="userDeleteButtonD" class="font-weight-600 font-size-13 text-color-head">Üyeliğimi Sil</a>
                            <input type="hidden" id="userID" value="{{Auth::User()->id}}">
                            <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                        </strong>
                        @endif  --}}
                    </p>
                </div>
            </div>
           
            <div class="col-48 col-xs-48 col-sm-48 col-md-24 col-lg-24 centering-logo">
                <a class="pr-20">
                    {{ svg_image('assets/img/demir-okulu-logo') }}
                    {{--  <img src="{{asset('/assets/img/demir-okulu-logo.png')}}" class="logo__right" alt="Genveon">  --}}
                </a>
                <a href="https://www.generica.com.tr/" class="footer__logo pr-20 logo__right">
                    {{ svg_image('assets/img/genveon-logo') }}
                    {{--  <img src="{{asset('/assets/img/genveon-logo.png')}}"  class="logo__left" alt="Genveon">  --}}
                </a>
                
            </div>
            <div class="col-48 col-xs-48 col-sm-48 col-md-22 col-lg-12">   
                <div class="d-block-mobil-footer pt-30 pb-20">
                    <p> Bu site <strong>Genveon</strong> İlaç firmasının koşulsuz katkılarıyla hazırlanmıştır.
                        Bu sitenin tüm hakları <strong>Genveon İlaç</strong>’a aittir. 
                        Site ile ilgili tüm soru ve görüşleriniz için iletişim bölümünden site sorumlusuna ulaşabilirsiniz.
                        {{-- @if(Auth::check())
                        <br><br><br><strong>
                            <a href="javascript:void(0)" id="userDeleteButtonM" class="font-weight-600 text-color-head">Üyeliğini Sil</a>
                        </strong>
                        @endif --}}
                    </p>
                </div>
            </div>
       </div>
    </div>




  {{-- <div class="container   text-md-left">
    <div class="row">
      <div class="col-48 col-sm-24 col-md-42 col-lg-16 justfy-content-center  mr-auto my-md-4 my-0 mt-4 mb-1  ">
        <h6 class=" mb-4 font-weight-400 mb-10">E-Bülten</h6>
        <form action="{{ route('web.'.app()->getLocale().'.ajax.subscriber') }}" class="js-form-validation-handle " method="POST"> 
            @honeypot
            @csrf
            <div class="alert alert-success d-none"></div>
            <input type="text" name="email" id="email" placeholder="E-Mail adresinizi giriniz." required data-rule-required="true" data-rule-email="true" class="mr-10 p-5">
            <button type="submit" class=" ml-1 button-opacity  button button-fixed-mobile button-red-500--fill  font-weight-500 min-width-sm-120 min-height-sm-35 mt-10 mb-10 px-3 py-1" >Gönder</button>
            @if (getPageByTemplate('InformationTextTwo'))
                <div class="form-group mb-0">
                    <div class="    ">
                        <input name="information_text_1" type="checkbox" class="custom-control-input" id="information_text_footer_1" data-rule-required="true">
                        <label class="mt-0 pt-2 custom-control-label font-size-xs-13 font-size-15 mb-15 pb-15 font-weight-400 js-popup-ajax " style="color: #000 !important; text-decoration:underline;" for="information_text_footer_1">
                            {!! theSentence('contact-information-text-agree', false, [
                                'link' => getPageByTemplate('InformationTextTwo')['viewLink']
                            ]) !!}
                        </label>
                    </div>
                </div>
            @endif
        </form>
      </div>
      <hr class="clearfix w-100 d-md-none">
      <div class="col-md-48 col-lg-18 mx-auto my-md-4 my-0 mt-4 mb-1 align-items-center justify-content-center d-flex d-block-desktop-footer">
        <p> Bu site <strong>Genveon</strong> İlaç firmasının koşulsuz katkılarıyla hazırlanmıştır.
            Bu sitenin tüm hakları <strong>Genveon İlaç</strong>’a aittir. 
            Site ile ilgili tüm soru ve görüşleriniz için iletişim bölümünden site sorumlusuna ulaşabilirsiniz.
            @if(Auth::check())
            <br><br><br><strong>
                <a href="javascript:void(0)" id="userDeleteButtonD">Üyeliğini Sil</a>
                <input type="hidden" id="userID" value="{{Auth::User()->id}}">
                <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
            </strong>
            @endif
        </p>
      </div>
      
      
      <hr class="clearfix w-100 d-sm-none d-block-desktop-footer ">
      <div class="col-md-10 col-lg-14 text-center mx-auto my-4">
        <div class="row flex-containers">
        
             <span>
                <a href="https://www.generica.com.tr/" class="col-16 col-sm-14 col-md-12 col-lg-16 ">
                    <img src="{{asset('/assets/img/genveon-logo.png')}}" alt="Genveon">
              </a>
             </span>
             <span  class="col-16 col-xs-14 col-md-12 col-lg-16 " >
                <img src="{{asset('/assets/img/mobil-demir-okulu-logo.png')}}" alt="Demir Okulu">
             </span>
        
        </div>
      <div class="col-md-48 col-lg-16 mx-auto my-md-4 my-0 mt-4 mb-1  justify-content-center d-block-mobil-footer">
        <div class="">
            <p> Bu site <strong>Genveon</strong> İlaç firmasının koşulsuz katkılarıyla hazırlanmıştır.
                Bu sitenin tüm hakları <strong>Genveon İlaç</strong>’a aittir. 
                Site ile ilgili tüm soru ve görüşleriniz için iletişim bölümünden site sorumlusuna ulaşabilirsiniz.
                
                @if(Auth::check())
                <br><br><br><strong>
                    <a href="javascript:void(0)" id="userDeleteButtonM">Üyeliğini Sil</a>
                
                </strong>
                @endif

            </p>
        </div>
       </div>
      
    </div>
  </div>
  --}}
  <div id="cookieConsent">
    {{--  <div id="closeCookieConsent">X</div>  --}}

    <div class="cookie__wrapper">
        <span class="cookies-text">

            Verdiğimiz hizmetleri geliştirmek için çerez kullanıyoruz. Konu ile ilgili daha detaylı bilgi almak ve kişisel tercihlerinizi yönetmek için  <a href="#"><u>Çerez Bilgilendirme Metni</u> </a> ve <a href="#"> <u>İnternet Sitesi KVK Bilgilendirme ve Açık Rıza Metni</u></a> 'ni ziyaret edebilirsiniz.
            
        </span>
        
        
        <a class="cookieConsentOK animate animate--fadeIn button button-white--fill font-weight-600 font-size-13 font-size-sm-16 rounded-sm min-width-sm-155 min-height-sm-51 py-2 px-10 py-sm-0 px-sm-0 mt-3 mt-sm-5 mt-xxxl-10 ">
      Devam
        </a>
    </div>
      
  
</div>
</footer>

<div id="popupDeleteUser" class="userDeletePopup hidden acceptPopupContent">
    <div class="row justify-content-center align-items-center">
        <div class="">
            <div class="col-sm-48 col-lg-48">
                <div class="popup-wrapper">
                    <div class="popup-content p-10 bg-color-2">
                        <div class="bg-color-5">
                            <div class="popup-text">
                                Üyeliğiniz silinecek, onaylıyor musunuz?
                            </div>
                            <div class="row pt-lg-15 pt-5 pt-lg-30 pb-25 pb-lg-40 justify-content-center align-items-center text-center">
                                <div class="col-48 col-lg-18 ">
                                    <a href="javascript:void(0)" id="userDeleteButtonCancel" class="button-opacity  button button-fixed-mobile button-button-500--fill border border-danger text-color-head font-weight-700 font-size-14 mt-15 font-size-sm-16  min-width-sm-155 min-height-sm-51 py-1 px-4  py-sm-0 px-sm-0 ">Vazgeç</a>
                                </div>
                                <div class="col-48 col-lg-18">
                                    <a href="javascript:void(0)" id="userDeleteButtonAccept" class="button-opacity  button button-fixed-mobile button-red-500--fill  font-weight-600 font-size-14 font-size-sm-16 mt-15 min-width-sm-155 min-height-sm-51 py-1 px-4  py-sm-0 px-sm-0 " alt="Üye Ol" id="_onceOk">
                                        Evet
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
