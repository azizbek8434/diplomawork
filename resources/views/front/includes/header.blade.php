<header id="header">
    <div class="container-fluid">
        <div id="logo" class="pull-left">
            {{-- <h1><a href="#intro" class="scrollto">BizPage</a></h1> --}}
            <!-- Uncomment below if you prefer to use an image logo -->
            <a href="/"><img src="{{ asset('front/img/logo.png')}}" alt="" title="prokuratura" /></a>
        </div>
        <nav id="nav-menu-container">
            <ul class="nav-menu">
                <li class="menu-active"><a href="#intro">Асосий </a></li>
                <li><a href="#news">Биз ҳақимизда</a></li>
                <li><a href="#services">Хизматлар</a></li>
                <li><a href="#facts">Статистика</a></li>
                <li><a href="#contact">Биз билан алоқа</a></li>
                @if (Route::has('login'))
                <li>
                    @auth
                        <a href="{{ url('/dashboard') }}">{{ auth()->user()->name }}</a>
                    @else
                        <a href="{{ route('login') }}">Кириш</a>
                    @endauth
                </li>
                @endif
            </ul>
        </nav><!-- #nav-menu-container -->
    </div>
</header><!-- #header -->
