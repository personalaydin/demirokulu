@extends('web.template.layout', [
    'headerClass' => 'header--shrink'
])
@section('content')



<main>
    <div class="bg-color-5 ">
        <div class="">
            <section>
                <div class="row pt-lg-40 align-items-center justify-content-center pb-30 pb-lg-0 mt-80">
                    <div class=" col-45 col-md-48 col-lg-20 bg-issue-2 pt-p-10 pb-p-20">
                        <div class="ml-xs-0 pr-xxl-0 ">
                            <div class="font-weight-500 text-center font-size-18 text-color-main font-weight-400 mb-40">
                                Maslak Mah.Sümer Sokak No.4 Kat14  34485 <strong>Sarıyer/İstanbul</strong>
                            </div>
                            <div class="font-weight-500 text-center text-color-main font-size-18 min-width-sm-400 ">
                                 <strong>Telefon: </strong><a href="tel:+902123766500">+90 212 376 65 00</a>&nbsp;&nbsp; <strong>Faks:</strong> <a href="tel:+902122135324">+90 212 213 5324</a>  
                            </div>
                            <div class="font-weight-500 text-center text-color-main font-size-20 min-width-sm-400 ">
                                <strong>E-Posta:</strong><a href= "mailto: sidefer@genveon.com"> sidefer@genveon.com</a>
                            </div>                                  
                        </div>
                        <div class="map-icon text-center align-items-center justify-content-center">
                            <a href="https://goo.gl/maps/KEPKt8sKNpN7fuFv5" target="_blank">
                                <img src="{{asset('/assets/img/contact/map-icon.png')}}" alt="Harita">
                                <div class="font-weight-700 font-size-28 font-size-md-22 font-size-xs-18 line-height-1-5" >
                                    <a href="https://goo.gl/maps/KEPKt8sKNpN7fuFv5">Haritada Gör</a>
                                </div>
                            </a>
        
                        </div>
                    </div>
                    <div class="col-48  col-md-40 col-lg-28">
                        <div class="form-container">
                            <h3 class="mt-20">Görüş, katkı ve tüm sorularınız için…</h3>
                            <form action="{{ route('web.'.app()->getLocale().'.ajax.contact') }}" class="contact-form js-form-validation-handle font-size-14" method="post">
                                @honeypot
                                @csrf
                                <div class="alert alert-success d-none"></div>
                                <div class="form__group field">
                                    <input  name="first_name" type="text" class=" form-control  form__field"  id="name" placeholder="{!! theSentence('contact-name-surname', false) !!}" onkeypress="return /^[a-zA-ZğüşöçİĞÜŞÖÇı ]*$/i.test(event.key)"  data-rule-required="true"/>
                                    <label for="name" class="form__label">AD *</label>
                                </div>
                                <div class="form__group field">
                                    <input  name="last_name" type="text" id="surname"  data-rule-required="true" placeholder="{!! theSentence('contact-name-surname', false) !!}"  class="form-control  form__field "  placeholder="{!! theSentence('contact-email', false) !!}" onkeypress="return /^[a-zA-ZğüşöçİĞÜŞÖÇı ]*$/i.test(event.key)"  data-rule-required="true" />
                                    <label for="name" class="form__label">SOYAD *</label>
                                </div>
                                <div class="form__group field">
                                    <input name="phone"  type="text" data-mask="000 000-0000" minlength="8" class="form-control form__field " id="phone" placeholder="{!! theSentence('contact-telephone', false) !!}*" data-rule-required="true" data-rule-phone="true">
                                    <label for="name" class="form__label">TELEFON *</label>
                                </div>
                                <div class="form__group field">
                                    <input name="email" type="email"  id="email" class="form-control  form__field"  placeholder="{!! theSentence('contact-email', false) !!}" data-rule-required="true" data-rule-email="true"/>
                                    <label for="name" class="form__label">E-MAIL *</label>
                                </div>
                                {{-- SELECT --}}
                                <div class="form-group field mt-10">
                                    <div class="select">
                                        <select class=" form__field" name="institution" id="institution">
                                          <option selected >Konu Seçiniz *</option>
                                          <option value="Ürün hakkında detaylı bilgi almak istiyorum">Ürün hakkında detaylı bilgi almak istiyorum</option>
                                          <option value="Hekimlerimize soru sormak istiyorum">Hekimlerimize soru sormak istiyorum</option>
                                          <option value="Katkıda bulunmak istiyorum">Katkıda bulunmak istiyorum</option>
                                          <option value="Diğer">Diğer</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form__group field">
                                    <textarea name="message" id="message" rows="5"  id="message" placeholder="{!! theSentence('contact-message', false) !!}" data-rule-required="true" data-gramm_editor="false" class="form-control  form__field" ></textarea>
                                    <label for="name" class="form__label">MESAJ *</label>
                                        </textarea>
                                    <label for="name" class="form__label">MESAJ</label>
                                </div>
                                
                                <div class="form-group">
                                    <button type="submit" id="submit_contact_form"  class="mt-25 button button-main--disabled button-red-500--fill font-weight-600 font-size-13 font-size-sm-16 rounded-sm min-width-md-380 min-width-sm-380 min-height-sm-45 min-width-xs-280 py-2 px-10  py-sm-0 px-sm-0">{!! textUppercase(theSentence('contact-send')) !!}</button>
                                </div>
                                
                                    <div class="form-group mb-0">
                                        <div class="custom-control custom-checkbox">
                                            <input name="subscription"  type="checkbox" class="custom-control-input" id="subscription" data-rule-required="true" required >
                                            <label class="pt-3 custom-control-label font-size-xs-13 text-color-main font-size-15 mb-5 mb-lg-0 mb-20  font-weight-400 js-popup-ajax" for="subscription">
                                                <a href="#" class="text-underline font-weight-400"><u>KVK Bilgilendirme Metni</u></a>'ni okudum, kişisel verilerimin işlenmesine onay veriyorum.
                                            </label>
                                        </div>
                                    </div>
                             
                            </form>
                            <div class="col-lg-24 text-left text-color-head font-size-13"> <strong>*</strong> İlgili alanları doldurmanız zorunludur.</div>
                            <div class=" mt-25 font-size-15 font-weight-500 line-height-1-5">
                                <p>Site Sorumlusu:  <span class="font-weight-700 font-size-16 font-size-xs-13">İpek Müftüoğlu</span> / <i> Kıdemli Ürün Müdürü </i> </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    </div>
</main>


@endsection

