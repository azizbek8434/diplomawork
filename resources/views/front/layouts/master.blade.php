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
        <section id="about">
            <div class="container">
                <header class="section-header">
                    <h3>Biz haqimizda</h3>
                    <p>Biz sizlarga hizmat ko'rsatishdan shodmiz. Biz aholining muammolarini o'rganish ularni hal qilish 
                    yo'llarini qidirmoqdamiz. Bizning guruh ko'plab muammolarning umumiy yechimlarini izlamoqda.</p>
                </header>
                <div class="row about-cols">
                    <div class="col-md-4 wow fadeInUp">
                        <div class="about-col">
                            <div class="img">
                                <img src="{{ asset('front/img/about-mission.jpg')}}" alt="" class="img-fluid">
                                <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
                            </div>
                            <h2 class="title"><a href="#">Bizning vazifamiz</a></h2>
                            <p>
                                Bizning vazifamiz xalq bilan muloqotda bo'lish. Ularning muammolarni yig'ish. Bu muammolarni
                                o'rganilib chiqish. Ularni hal qilishdan iborat.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="about-col">
                            <div class="img">
                                <img src="{{ asset('front/img/about-plan.jpg')}}" alt="" class="img-fluid">
                                <div class="icon"><i class="ion-ios-list-outline"></i></div>
                            </div>
                            <h2 class="title"><a href="#">Bizning maqsadimiz</a></h2>
                            <p>
                                Aholining ijtimoiy muammolarini o'rganib ularni hal qilish. Xalqning og'irini yengil qilishdir.
                                Aholining talab va istaklarini qondirish. Ijtimoiy yordamga muhtojlarga yordam berish. 
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="about-col">
                            <div class="img">
                                <img src="{{ asset('front/img/about-vision.jpg')}}" alt="" class="img-fluid">
                                <div class="icon"><i class="ion-ios-eye-outline"></i></div>
                            </div>
                            <h2 class="title"><a href="#">Biz ko'ramiz</a></h2>
                            <p>
                                Bizga yuborilgan har bitta fikr mulohaza biz uchun ahamiyatli. Bizga sizning fikrlaringiz qiziq.
                                Biz bu fikrlarni inobatga olishga harakat qilamiz. 
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
                    <h3>HIZMATLARIMIZ</h3>
                    <p>O'zbekiston Respublikasi Farg'ona viloyati bosh prokuraturasi sizga o'z hizmatlarini taklif etadi.</p>
                </header>
                <div class="row">
                    <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
                        <div class="icon"><i class="ion-ios-analytics-outline"></i></div>
                        <h4 class="title"><a href="">Jinoyatchilikni oldini olish</a></h4>
                        <p class="description">Aholi orasida jinoyatchilikka qarshi kurashish shiori asosida birlashib bunga qarshi 
                        kurashish</p>
                    </div>
                    <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
                        <div class="icon"><i class="ion-ios-bookmarks-outline"></i></div>
                        <h4 class="title"><a href="">Xalq muammolari</a></h4>
                        <p class="description">Xalqning muammolarini yig'ish. Ularni to'plash ular uchun umumiy yechimni topish.
                        </p>
                    </div>
                    <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
                        <div class="icon"><i class="ion-ios-paper-outline"></i></div>
                        <h4 class="title"><a href="">Onlayn qabul</a></h4>
                        <p class="description">Tadbirkorlar uchun qulaylik tug'dirish maqsadida onlayn murojatlarni qabul qilish.
                        Ularni fikr mulohazalarini o'rganish.</p>
                    </div>
                    <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
                        <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
                        <h4 class="title"><a href="">Ish bilan taminlash</a></h4>
                        <p class="description">Ishga layoqatli odamlarni bo'sh ish o'rinlari bilan taminlash.
                        Ularga kerakli bo'lgan ijtimoiy yordam ko'rsatish.</p>
                    </div>
                    <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
                        <div class="icon"><i class="ion-ios-barcode-outline"></i></div>
                        <h4 class="title"><a href="">Murojaatlar statistikasi</a></h4>
                        <p class="description">Bizga kelib tushgan murojatlarni statistik ko'rinishini
                        shakllantirish. Ularni shaffoflik orqali xalq bilan tanishtirish</p>
                    </div>
                    <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
                        <div class="icon"><i class="ion-ios-people-outline"></i></div>
                        <h4 class="title"><a href="">Ijtimoiy himoya</a></h4>
                        <p class="description">Ijtimoiy himoyaga muhtoj insonlar uchun yordam ko'rsatish 
                        ularni muammolarini hal qilish.</p>
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
                    <h3>Murojaatlar statistikasi</h3>
                    <p>Sayt orqali shikoyatlar bo'yicha statistika</p>
                </header>
                <div class="row counters">
                    <div class="col-lg-3 col-6 text-center">
                        <span data-toggle="counter-up">274</span>
                        <p>Fuqarolar</p>
                    </div>
                    <div class="col-lg-3 col-6 text-center">
                        <span data-toggle="counter-up">421</span>
                        <p>SHikoyatlar</p>
                    </div>
                    <div class="col-lg-3 col-6 text-center">
                        <span data-toggle="counter-up">1,364</span>
                        <p>Yordam vaqti</p>
                    </div>
                    <div class="col-lg-3 col-6 text-center">
                        <span data-toggle="counter-up">18</span>
                        <p>Inspektorlar</p>
                    </div>
                </div>
            </div>
        </section><!-- #facts -->
        <!--========================== Contact Section ============================-->
        <section id="contact" class="section-bg wow fadeInUp">
            <div class="container">
                <div class="section-header">
                    <h3>Biz bilan aloqa</h3>
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
