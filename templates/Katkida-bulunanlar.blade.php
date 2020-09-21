@extends('web.template.layout', [
    'headerClass' => 'header--shrink'
])
@section('content')
     <main>
        <div class="position-relative "></div> 
        <section id="scroll" class="mb-50"></section>
            <div class="row align-items-center justify-content-center mt-lg-110 py-10  px-0 px-md-20 ">
                <div class="col-48 col-md-24 col-lg-40 col-xl-42  ml-0 ml-sm-0 ml-md-50 ml-lg-0">
                    <div class="position-relative ">
                        <div class="js-slick main-slider slick-carousel--full-height" >
                            <div class="">
                                <div class=" text-center">
                                    <div class="animate animate--fadeIn" data-animate="fadeInDown" data-animate-delay="100">
                                        <div class="text-center font-head justify-content-center mt-10 font-weight-600  line-height-1-5 text-color-black">
                                            KATKIDA BULUNANLAR
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex-container">
                        <div class="js-slick main-slider slick-carousel--full-height" >
                            <div class="container">
                                <div class="">
                                    <div class="animate animate--fadeIn" data-animate="fadeInUp" data-animate-delay="100">
                                        <div class="item">
                                            <img src="{{asset('/assets/img/doctors/songul-yalcin.png')}}" alt="">
                                            <div class="head text-left ">Prof. Dr. Songül Yalçın</div>
                                            <p class="text-left">Çocuk Sağlığı ve Hastalıkları</p>
                                           
                                                Hacettepe Üniversitesi Sosyal Pediatri Çocuk Sağlığı Enstitüsü'nden yüksek<span class="dot-1">...</span>

                                                <div class="show-more-wrapper">
                                                <div class="additional-content">

                                                    <div class="text-1  show-more-1-height">
                                                        lisans eğitimini tamamlamıştır.  Yine aynı üniversitede öğretim görevlisi olarak çalışmalarına devam etmektedir.  Halk Sağlığı Genel Müdürlüğü’nün yürüttüğü Demir Gibi Türkiye Projesinde rol almıştır. 2019 yılında Sukrozomiyal®️ Demir Türkiye Saha çalışmasını da koordine etmiştir.
                                                    </div>
                                                    
                                                </div>
                                                <a href="#" class="show-more-1 sm-1" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Devamı için </a>
                                            </div> 

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="js-slick main-slider slick-carousel--full-height " >
                            <div class="container">
                                <div class="">
                                    <div class="animate animate--fadeIn" data-animate="fadeInUp" data-animate-delay="100">
                                        <div class="item">
                                            <img src="{{asset('/assets/img/doctors/mehmet-cetinkaya.png')}}" alt="">
                                            <div class="head ">Prof. Dr. Mert Çetinkaya</div>
                                            <p class="text-left">Kadın Hastalıkları ve Doğum</p>

                                                İstanbul Üniversitesi Cerrahpaşa Tıp Fakültesi’nden mezun olduktan<span class="dot-2">...</span>
                                          
                                            <div class="show-more-wrapper">
                                                <div class="additional-content">
                                                   <div class=" text-2 show-more-2-height">
                                                        sonra uzmanlığını yine aynı üniversiteden Kadın Hastalıkları ve Doğum bölümünden almıştır. Sonrasında ABD’de Yale  Üniversitesi’nde  Yale Reproductive Endocrinology ve  Yale Fertility Center bölümlerinde  çalışma fırsatı yakalamıştır.  2000 – 2013 yılları arasında çalışmaları uluslararası platformlarda yayınlanmıştır. Şu an On dokuz Mayıs Üniversitesi’nde çalışmalarına devam etmektedir.
                                                    
                                                   </div>
                                                </div>
                                                <a href="#" class="show-more-2 sm-2" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Devamı için</a>
                                            </div> 


                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                        
                        
                        <div class="js-slick main-slider slick-carousel--full-height" >
                            <div class="container">
                                <div class=" ">
                                    <div class="animate animate--fadeIn" data-animate="fadeInDown" data-animate-delay="100">
                                        <div class="item">
                                            <img src="{{asset('/assets/img/doctors/asli-arslan.png')}}" alt="">
                                            <div class="head ">Doç. Dr. Aslı Arslan</div>
                                            <p class="text-left">Çocuk Sağlığı ve Hastalıkları</p>
                                            
                                                Doç. Dr. Aslı Aslan  1974 yılında İzmir’de doğdu. 1992 yılında İzmir Bornova<span class="dot-3">...</span>
                                            
                                            <div class="show-more-3-wrapper">
                                                <div class="additional-content">
                                                   <div class="text-3 show-more-3-height">
                                                   
                                                    Anadolu Lisesi’nden, 1998 yılında Ege Üniversitesi Tıp Fakültesi'nden mezun olarak Tıp Doktoru unvanı aldı. İhtisasını 1999-2003 yılları arasında Tepecik Eğitim Araştırma Hastanesinde tamamladı. Ege Üniversitesi Tıp Fakültesi Çocuk Sağlığı ve Hastalıkları Anabilim Dalı’nda 2017 yılında doçent oldu. Halen aynı bilim dalında çalışmalarına devem etmektedir. 
                                                    
                                                   </div>
                                                </div>
                                                <a href="#" class="show-more-3 sm-3" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Devamı için</a>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="js-slick main-slider slick-carousel--full-height" >
                            <div class="container">
                                <div class="">
                                    <div class="animate animate--fadeIn" data-animate="fadeInDown" data-animate-delay="100">
                                        <div class="item">
                                            <img src="{{asset('/assets/img/doctors/cansun-demir.png')}}" alt="">
                                            <div class="head ">Prof. Dr. Cansun Demir</div>
                                            <p class="text-left">Kadın Hastalıkları ve Doğum</p>
                                                İstanbul Tıp Fakültesi’nden mezun olan Prof. Dr. Cansun Demir 1997 yılında<span class="dot-4">...</span>
                                            <div class="show-more-4-wrapper"> 
                                                <div class="additional-content">
                                                   <div class="text-4 show-more-4-height">
                                                        Çukurova Üniversitesi Tıp Fakültesi Kadın Hastalıkları ve Doğum Anabilim dalında sırasıyla uzman, Yard.Doç.Doçent, 1 Mayıs 2007 tarihinden itibaren Profesör olarak görev yapmıştır. 34’ü yurtdışı olmak üzere 125 yayın ve bildirimi mevcuttur. Alanında 22 kitap bölümü ve kitap yazmıştır. Çok sayıda yurt içi ve yurtdışı kongreye konuşmacı ve oturum başkanı olarak katılmaktadır. Ayrıca Çukurova Üniversitesi Tıp Fakültesi Kurulu, Yönetim Kurulu ve Etik Kurul ve Tıp Eğitimi Koordinatörler kurul üyesi olarak görev yapmıştır. Halen Adana Acıbadem Hastanesi Kadın Hastalıkları ve Doğum, Prenataloji uzmanı olarak çalışmaya devam etmektedir.
                                                   </div>
                                                </div>
                                                <a href="#" class="show-more-4 sm-4 " data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Devamı için</a>
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
