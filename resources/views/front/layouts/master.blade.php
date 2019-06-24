<!DOCTYPE html>
<html lang="en">

<head>
    @include('front.includes.head')
    <script src="https://unpkg.com/popper.js@1/dist/umd/popper.min.js"></script>
    <script src="https://unpkg.com/tippy.js@4"></script>
</head>

<body>
    <!--========================== Header ============================-->
    @include('front.includes.header')
    <!--======================== Intro Section ========================-->
    <section id="intro">
        <div class="intro-container">
            <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

                <ol class="carousel-indicators"></ol>

                <div class="carousel-inner" role="listbox">
                    @foreach($sliders as $slider)
                    <div class="carousel-item {{ $loop->first ?  'active' : ''}}">
                        <div class="carousel-background"><img
                                src="{{ asset('front/img/intro-carousel/'.$slider->image )}}"
                                alt="{{ $slider->title }}">
                        </div>
                        <div class="carousel-container">
                            <div class="carousel-content">
                                @if($slider->title)
                                <h2>{{ $slider->title }}</h2>
                                @endif

                                @if($slider->content)
                                <p>{{ $slider->content }}
                                    @if($slider->author)
                                    </br><span class="author pull-right">{{ $slider->author }}</span>
                                    @endif
                                </p>
                                @endif
                                @if($slider->url)
                                <a href="{{ $slider->url }}" class="btn-get-started scrollto">Батафсил</a>
                                @endif
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Ортга</span>
                </a>

                <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Олдинга</span>
                </a>

            </div>
        </div>
    </section><!-- #intro -->
    <main id="main">
        <!--========================== About Us Section ============================-->
        <section id="news">
            <div class="container">
                <header class="section-header">
                    <h3>БИЗ ҲАҚИМИЗДА</h3>
                    <p>Биз сизларга хизмат кўрсатишдан шодмиз. Биз аҳолининг муаммоларини ўрганиш уларни ҳал қилиш йўлларини қидирмоқдамиз. Бизнинг гуруҳ кўплаб муаммоларнинг умумий ечимларини изламоқда..</p>
                </header>
                <div class="row about-cols">
                    <div class="col-md-4 wow">
                        <div class="about-col">
                            <div class="img">
                                <img src="{{ asset('front/img/about-mission.jpg')}}" alt="" class="img-fluid">
                                {{-- <div class="icon"><i class="ion-ios-speedometer-outline"></i></div> --}}
                            </div>
                            <h2 class="title"><a href="#">Бизнинг вазифамиз</a></h2>
                            <p>
                                Бизнинг вазифамиз халқ билан мулоқотда бўлиш. Уларнинг муаммоларни тинглаш. Бу муаммоларни ўрганилиб чиқиш. Уларга ечимлар топишдан иборат.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 wow" data-wow-delay="0.1s">
                        <div class="about-col">
                            <div class="img">
                                <img src="{{ asset('front/img/about-plan.jpg')}}" alt="" class="img-fluid">
                                {{-- <div class="icon"><i class="ion-ios-list-outline"></i></div> --}}
                            </div>
                            <h2 class="title"><a href="#">Бизнинг мақсадимиз</a></h2>
                            <p>
                                Аҳолининг ижтимоий муаммоларини ўрганиб уларни ҳал қилиш. Халқнинг оғирини енгил қилишдир. Ижтимоий ёрдамга муҳтожларга ёрдам бериш. 
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 wow" data-wow-delay="0.2s">
                        <div class="about-col">
                            <div class="img">
                                <img src="{{ asset('front/img/about-vision.jpg')}}" alt="" class="img-fluid">
                                {{-- <div class="icon"><i class="ion-ios-eye-outline"></i></div> --}}
                            </div>
                            <h2 class="title"><a href="#">Биз кузатамиз</a></h2>
                            <p>
                                Бизга юборилган ҳар битта фикр мулоҳаза биз учун аҳамиятли. Бизга сизнинг фикрларингиз қизиқ. Биз бу фикрларни инобатга олишга ҳаракат қиламиз. 
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- #about -->
        <!--========================== Services Section ============================-->
        <section id="services">
            <div class="container">
                <header class="section-header wow">
                    <h3>ХИЗМАТЛАРИМИЗ</h3>
                    <p>Ўзбекистон Республикаси Фарғона вилояти бош прокуратураси сизга ўз ҳизматларини таклиф этади.</p>
                </header>
                <div class="row">
                    <div class="col-lg-4 col-md-6 box wow" data-wow-duration="1.4s">
                        <div class="icon"><i class="ion-ios-analytics-outline"></i></div>
                        <h4 class="title"><a href="#">Жиноятчиликни олдини олиш</a></h4>
                        <p class="description">Аҳоли орасида жиноятчиликка қарши курашиш шиори асосида бирлашиб бунга қарши 
                        курашиш</p>
                    </div>
                    <div class="col-lg-4 col-md-6 box wow" data-wow-duration="1.4s">
                        <div class="icon"><i class="ion-ios-bookmarks-outline"></i></div>
                        <h4 class="title"><a href="#">Халқ муаммолари</a></h4>
                        <p class="description">Халқнинг муаммоларини йиғиш. Уларни тўплаш улар учун умумий ечимни топиш.
                        </p>
                    </div>
                    <div class="col-lg-4 col-md-6 box wow" data-wow-duration="1.4s">
                        <div class="icon"><i class="ion-ios-paper-outline"></i></div>
                        <h4 class="title"><a href="#">Онлайн қабул</a></h4>
                        <p class="description">Тадбиркорлар учун қулайлик туғдириш мақсадида онлайн мурожатларни қабул қилиш.
                        Уларни фикр мулоҳазаларини ўрганиш.</p>
                    </div>
                    <div class="col-lg-4 col-md-6 box wow" data-wow-delay="0.1s" data-wow-duration="1.4s">
                        <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
                        <h4 class="title"><a href="#">Иш билан таминлаш</a></h4>
                        <p class="description">Ишга лаёқатли одамларни бўш иш ўринлари билан таминлаш.
                        Уларга керакли бўлган ижтимоий ёрдам кўрсатиш.</p>
                    </div>
                    <div class="col-lg-4 col-md-6 box wow" data-wow-delay="0.1s" data-wow-duration="1.4s">
                        <div class="icon"><i class="ion-ios-barcode-outline"></i></div>
                        <h4 class="title"><a href="#">МУРОЖААТЛАР СТАТИСТИКАСИ</a></h4>
                        <p class="description">Бизга келиб тушган мурожатларни статистик кўринишини
                        шакллантириш. Уларни шаффофлик орқали халқ билан таништириш</p>
                    </div>
                    <div class="col-lg-4 col-md-6 box wow" data-wow-delay="0.1s" data-wow-duration="1.4s">
                        <div class="icon"><i class="ion-ios-people-outline"></i></div>
                        <h4 class="title"><a href="#">Ижтимоий ҳимоя</a></h4>
                        <p class="description">Ижтимоий ҳимояга муҳтож инсонлар учун ёрдам кўрсатиш 
                        уларни муаммоларини ҳал қилиш.</p>
                    </div>
                </div>
            </div>
        </section><!-- #services -->
        <!--========================== Call To Action Section ============================-->
        <section id="call-to-action" class="wow">
            <div class="container text-center">
                <h3>Бизнинг хабарномамиз</h3>
                <p> Ўзбекистон Республикаси Бош Прокуратураси томонидан олиб борилаётган ишлар ва янгиликлардан ҳабардор
                    бўлиб туриш учун э-почта манзилингизни қолдиринг.</p>
                <form action="/subscribe" method="post">
                    {{ csrf_field() }}
                    <input type="email" name="email" class="cta-input" style="width: 300px;" placeholder="E-mail">
                    <input type="submit" value="Хабар жўнатиш" class="cta-btn">
                </form>
            </div>
        </section><!-- #call-to-action -->
        <!--========================== Facts Section ============================-->
        <section id="facts" class="wow">
            <div class="container">
                <header class="section-header">
                    <h3>Мурожаатлар статистикаси</h3>
                    <p>Сайт орқали шикоятлар бўйича статистика</p>
                </header>
                <div class="row counters">
                    <div class="col-lg-3 col-6 text-center">
                        <span data-toggle="counter-up">{{ $data['complaint_counts'] ?? 274 }}</span>
                        <p>Шикоятлар</p>
                    </div>
                    <div class="col-lg-3 col-6 text-center">
                        <span data-toggle="counter-up">{{ $data['solved_complaints_persentage'] ?? "42" }}</span>
                        <p>Ҳал қилинган муаммолар</p>
                    </div>
                    <div class="col-lg-3 col-6 text-center">
                        <span data-toggle="counter-up">{{ $data['users_count'] ?? 21 }}</span>
                        <p>Инспекторлар</p>
                    </div>
                    <div class="col-lg-3 col-6 text-center">
                        <span data-toggle="counter-up">{{ $data['complaint_types'] ?? 210 }}</span>
                        <p>Шикоят турлари</p>
                    </div>
                </div>
            </div>
    <section id="testimonials" class="wow">
      <div class="container">
        <div class="owl-carousel testimonials-carousel">
            @foreach ($complaints as $complaint)
                <div class="testimonial-item">
                    <h3>{{ $complaint->sender_full_name }}</h3>
                    <h4>{{ "Шикоят тури: ".$complaint->complaintType->name }}</h4>
                    <p>
                    <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
                    {{ $complaint->title }}
                    <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
                    </p>
          </div>
            @endforeach
        </div>
      </div>
    </section><!-- #testimonials -->
        </section><!-- #facts -->

<!--========================== Testimonials ============================-->
    

        <!--========================== Contact Section ============================-->
        <section id="contact" class="section-bg wow">
            <div class="container">
                <div class="section-header">
                    <h3>Биз билан алоқа</h3>
                    <p>Бизга онлайн тарзда ҳабар жўнатинг.</p>
                </div>
                <div class="row contact-info">
                    <div class="col-md-4">
                        <div class="contact-address">
                            <i class="ion-ios-location-outline"></i>
                            <h3>Манзил</h3>
                            <address>Яҳё Ғуломов кўчаси, 66</address>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="contact-phone">
                            <i class="ion-ios-telephone-outline"></i>
                            <h3>Телефон</h3>
                            <p><a href="tel:+998712338280">+99871 233-82-80</a></p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="contact-email">
                            <i class="ion-ios-email-outline"></i>
                            <h3>Э-Почта</h3>
                            <p><a href="mailto:info@prokuratura.uz">info@prokuratura.uz</a></p>
                        </div>
                    </div>
                </div>
                <div class="form">
                    <div id="sendmessage">Хабарингиз жўнатилди. Раҳмат!</div>
                    <div id="errormessage"></div>
                    <form action="{{ route('message.store') }}" method="post" role="form" class="contactForm">
                    {{ csrf_field() }}
                    {{ method_field('POST') }}
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input type="text" name="full_name" class="form-control" id="name"
                                    placeholder="Исм шарифингиз" data-rule="minlen:4"
                                    data-msg="Илтимос, камида 4 та белгини киритинг" />
                                    <div class="validation"></div>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Э-Почта"
                                    data-rule="email" data-msg="Илтимос, тўғри электрон почта киритинг" />
                                <div class="validation"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Мавзу"
                                data-rule="minlen:4" data-msg="Илтимос, мавзу бўйича камида 8 та ҳарфни киритинг" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" data-rule="required"
                                data-msg="Илтимос, биз учун бирор нарса ёзинг" placeholder="Хабар"></textarea>
                            <div class="validation"></div>
                        </div>
                        <div class="text-center"><button type="submit">Хабар жўнатиш</button></div>
                    </form>
                </div>
            </div>
        </section><!-- #contact -->
        <!--========================== Clients Section ============================-->
        <section id="clients" class="wow">
            <div class="container">
                <header class="section-header">
                    <h3>Фойдали Ҳаволалар</h3>
                </header>
                <div class="owl-carousel clients-carousel">
                    @foreach ($links as $link)
                    <a href="{{ $link->url }}" target="_blank">
                        <img src="/front/img/clients/{{ $link->image }}" alt="{{ $link->title }}">
                    </a>
                    @endforeach
                </div>
            </div>
        </section><!-- #clients -->
    </main>
    <!--========================== Footer ============================-->
    <footer id="footer">
        @include('front.includes.footer')
    </footer><!-- #footer -->
    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    <div id="preloader"></div>
    @include('front.includes.script')
</body>

</html>
