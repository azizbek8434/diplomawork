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
                    <h3>Сўнгги Янгиликлар</h3>
                </header>
                <div class="row about-cols">
                    <div class="col-md-4 wow fadeInUp">
                        <div class="about-col">
                            <div class="img">
                                <img src="{{ asset('front/img/about-mission.jpg')}}" alt="" class="img-fluid">
                                <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
                            </div>
                            <h2 class="title"><a href="#">Our Mission</a></h2>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore
                                magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                aliquip ex ea commodo consequat.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="about-col">
                            <div class="img">
                                <img src="{{ asset('front/img/about-plan.jpg')}}" alt="" class="img-fluid">
                                <div class="icon"><i class="ion-ios-list-outline"></i></div>
                            </div>
                            <h2 class="title"><a href="#">Our Plan</a></h2>
                            <p>
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem doloremque laudantium,
                                totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto
                                beatae vitae dicta sunt explicabo.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="about-col">
                            <div class="img">
                                <img src="{{ asset('front/img/about-vision.jpg')}}" alt="" class="img-fluid">
                                <div class="icon"><i class="ion-ios-eye-outline"></i></div>
                            </div>
                            <h2 class="title"><a href="#">Our Vision</a></h2>
                            <p>
                                Nemo enim ipsam voluptatem quia voluptas sit aut odit aut fugit, sed quia magni dolores
                                eos qui ratione voluptatem sequi nesciunt Neque porro quisquam est, qui dolorem ipsum
                                quia dolor sit amet.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- #about -->
        <!--========================== Services Section ============================-->
        <section id="services">
            <div class="container">
                <header class="section-header wow fadeInUp">
                    <h3>Интерактив Хизматлар</h3>
                </header>
                <div class="row">
                    <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
                        <div class="icon"><i class="ion-ios-analytics-outline"></i></div>
                        <h4 class="title"><a href="">Lorem Ipsum</a></h4>
                        <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias
                            excepturi sint occaecati cupiditate non provident</p>
                    </div>
                    <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
                        <div class="icon"><i class="ion-ios-bookmarks-outline"></i></div>
                        <h4 class="title"><a href="">Dolor Sitema</a></h4>
                        <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                            ex ea commodo consequat tarad limino ata</p>
                    </div>
                    <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
                        <div class="icon"><i class="ion-ios-paper-outline"></i></div>
                        <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
                        <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                            dolore eu fugiat nulla pariatur</p>
                    </div>
                    <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
                        <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
                        <h4 class="title"><a href="">Magni Dolores</a></h4>
                        <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                            deserunt mollit anim id est laborum</p>
                    </div>
                    <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
                        <div class="icon"><i class="ion-ios-barcode-outline"></i></div>
                        <h4 class="title"><a href="">Nemo Enim</a></h4>
                        <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                            praesentium voluptatum deleniti atque</p>
                    </div>
                    <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
                        <div class="icon"><i class="ion-ios-people-outline"></i></div>
                        <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
                        <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero
                            tempore, cum soluta nobis est eligendi</p>
                    </div>
                </div>
            </div>
        </section><!-- #services -->
        <!--========================== Call To Action Section ============================-->
        <section id="call-to-action" class="wow fadeIn">
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
        <section id="facts" class="wow fadeIn">
            <div class="container">
                <header class="section-header">
                    <h3>Мурожаатлар статистикаси</h3>
                    <p>Сайт орқали шикоятлар бўйича статистика</p>
                </header>
                <div class="row counters">
                    <div class="col-lg-3 col-6 text-center">
                        <span data-toggle="counter-up">274</span>
                        <p>Фуқоролар</p>
                    </div>
                    <div class="col-lg-3 col-6 text-center">
                        <span data-toggle="counter-up">421</span>
                        <p>Шикоятлар</p>
                    </div>
                    <div class="col-lg-3 col-6 text-center">
                        <span data-toggle="counter-up">1,364</span>
                        <p>Ёрдам вақти</p>
                    </div>
                    <div class="col-lg-3 col-6 text-center">
                        <span data-toggle="counter-up">18</span>
                        <p>Инспекторлар</p>
                    </div>
                </div>
            </div>
        </section><!-- #facts -->
        <!--========================== Portfolio Section ============================-->
        <section id="portfolio" class="section-bg">
            <div class="container">
                <header class="section-header">
                    <h3 class="section-title">Our Portfolio</h3>
                </header>
                <div class="row">
                    <div class="col-lg-12">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            <li data-filter=".filter-app">App</li>
                            <li data-filter=".filter-card">Card</li>
                            <li data-filter=".filter-web">Web</li>
                        </ul>
                    </div>
                </div>
                <div class="row portfolio-container">
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="{{ asset('front/img/portfolio/app1.jpg')}}" class="img-fluid" alt="">
                                <a href="{{ asset('front/img/portfolio/app1.jpg')}}" data-lightbox="portfolio"
                                    data-title="App 1" class="link-preview" title="Preview"><i
                                        class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i
                                        class="ion ion-android-open"></i></a>
                            </figure>
                            <div class="portfolio-info">
                                <h4><a href="#">App 1</a></h4>
                                <p>App</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="{{ asset('front/img/portfolio/web3.jpg')}}" class="img-fluid" alt="">
                                <a href="{{ asset('front/img/portfolio/web3.jpg')}}" class="link-preview"
                                    data-lightbox="portfolio" data-title="Web 3" title="Preview"><i
                                        class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i
                                        class="ion ion-android-open"></i></a>
                            </figure>
                            <div class="portfolio-info">
                                <h4><a href="#">Web 3</a></h4>
                                <p>Web</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="{{ asset('front/img/portfolio/app2.jpg')}}" class="img-fluid" alt="">
                                <a href="{{ asset('front/img/portfolio/app2.jpg')}}" class="link-preview"
                                    data-lightbox="portfolio" data-title="App 2" title="Preview"><i
                                        class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i
                                        class="ion ion-android-open"></i></a>
                            </figure>
                            <div class="portfolio-info">
                                <h4><a href="#">App 2</a></h4>
                                <p>App</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="{{ asset('front/img/portfolio/card2.jpg')}}" class="img-fluid" alt="">
                                <a href="{{ asset('front/img/portfolio/card2.jpg')}}" class="link-preview"
                                    data-lightbox="portfolio" data-title="Card 2" title="Preview"><i
                                        class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i
                                        class="ion ion-android-open"></i></a>
                            </figure>
                            <div class="portfolio-info">
                                <h4><a href="#">Card 2</a></h4>
                                <p>Card</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="{{ asset('front/img/portfolio/web2.jpg')}}" class="img-fluid" alt="">
                                <a href="{{ asset('front/img/portfolio/web2.jpg')}}" class="link-preview"
                                    data-lightbox="portfolio" data-title="Web 2" title="Preview"><i
                                        class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i
                                        class="ion ion-android-open"></i></a>
                            </figure>
                            <div class="portfolio-info">
                                <h4><a href="#">Web 2</a></h4>
                                <p>Web</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="{{ asset('front/img/portfolio/app3.jpg')}}" class="img-fluid" alt="">
                                <a href="{{ asset('front/img/portfolio/app3.jpg')}}" class="link-preview"
                                    data-lightbox="portfolio" data-title="App 3" title="Preview"><i
                                        class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i
                                        class="ion ion-android-open"></i></a>
                            </figure>
                            <div class="portfolio-info">
                                <h4><a href="#">App 3</a></h4>
                                <p>App</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="{{ asset('front/img/portfolio/card1.jpg')}}" class="img-fluid" alt="">
                                <a href="{{ asset('front/img/portfolio/card1.jpg')}}" class="link-preview"
                                    data-lightbox="portfolio" data-title="Card 1" title="Preview"><i
                                        class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i
                                        class="ion ion-android-open"></i></a>
                            </figure>
                            <div class="portfolio-info">
                                <h4><a href="#">Card 1</a></h4>
                                <p>Card</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp" data-wow-delay="0.1s">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="{{ asset('front/img/portfolio/card3.jpg')}}" class="img-fluid" alt="">
                                <a href="{{ asset('front/img/portfolio/card3.jpg')}}" class="link-preview"
                                    data-lightbox="portfolio" data-title="Card 3" title="Preview"><i
                                        class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i
                                        class="ion ion-android-open"></i></a>
                            </figure>
                            <div class="portfolio-info">
                                <h4><a href="#">Card 3</a></h4>
                                <p>Card</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.2s">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="{{ asset('front/img/portfolio/web1.jpg')}}" class="img-fluid" alt="">
                                <a href="{{ asset('front/img/portfolio/web1.jpg')}}" class="link-preview"
                                    data-lightbox="portfolio" data-title="Web 1" title="Preview"><i
                                        class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i
                                        class="ion ion-android-open"></i></a>
                            </figure>
                            <div class="portfolio-info">
                                <h4><a href="#">Web 1</a></h4>
                                <p>Web</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- #portfolio -->
        <!--========================== Team Section ============================-->
        <section id="team">
            <div class="container">
                <div class="section-header wow fadeInUp">
                    <h3>Инспекторлар</h3>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 wow fadeInUp">
                        <div class="member">
                            <img src="{{ asset('front/img/team-1.jpg')}}" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>Walter White</h4>
                                    <span>Chief Executive Officer</span>
                                    {{-- <div class="social">
                                        <a href=""><i class="fa fa-twitter"></i></a>
                                        <a href=""><i class="fa fa-facebook"></i></a>
                                        <a href=""><i class="fa fa-google-plus"></i></a>
                                        <a href=""><i class="fa fa-linkedin"></i></a>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="member">
                            <img src="{{ asset('front/img/team-2.jpg')}}" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>Sarah Jhonson</h4>
                                    <span>Product Manager</span>
                                    <div class="social">
                                        <a href=""><i class="fa fa-twitter"></i></a>
                                        <a href=""><i class="fa fa-facebook"></i></a>
                                        <a href=""><i class="fa fa-google-plus"></i></a>
                                        <a href=""><i class="fa fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="member">
                            <img src="{{ asset('front/img/team-3.jpg')}}" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>William Anderson</h4>
                                    <span>CTO</span>
                                    <div class="social">
                                        <a href=""><i class="fa fa-twitter"></i></a>
                                        <a href=""><i class="fa fa-facebook"></i></a>
                                        <a href=""><i class="fa fa-google-plus"></i></a>
                                        <a href=""><i class="fa fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="member">
                            <img src="{{ asset('front/img/team-4.jpg')}}" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>Amanda Jepson</h4>
                                    <span>Accountant</span>
                                    <div class="social">
                                        <a href=""><i class="fa fa-twitter"></i></a>
                                        <a href=""><i class="fa fa-facebook"></i></a>
                                        <a href=""><i class="fa fa-google-plus"></i></a>
                                        <a href=""><i class="fa fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- #team -->
        <!--========================== Contact Section ============================-->
        <section id="contact" class="section-bg wow fadeInUp">
            <div class="container">
                <div class="section-header">
                    <h3>Биз билан боғланиш</h3>
                    <p></p>
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
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input type="text" name="name" class="form-control" id="name"
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
        <section id="clients" class="wow fadeInUp">
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
    <script>
        $(document).ready(function () {
            $("#demo-calendar").simpleCalendar({
                months: ['январ', 'феврал', 'март', 'апрел', 'май', 'июн', 'июл', 'август', 'сентябр',
                    'октябр'
                ],
                days: ['як', 'ду', 'се', 'чор', 'пай', 'жу', 'шан'],
            });
            tippy('.day.event', {
                theme: 'translucent',
            });
        });

    </script>
</body>

</html>
