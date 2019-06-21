<header id="header">
    <div class="container-fluid">
        <div id="logo" class="pull-left">
            {{-- <h1><a href="#intro" class="scrollto">BizPage</a></h1> --}}
            <!-- Uncomment below if you prefer to use an image logo -->
            <a href="/"><img src="{{ asset('front/img/logo.png')}}" alt="" title="prokuratura" /></a>
        </div>
        <nav id="nav-menu-container">
            <ul class="nav-menu">
                <li class="menu-active"><a href="#intro">Asosiy </a></li>
                <li><a href="#about">Biz haqimizda</a></li>
                <li><a href="#services">Hizmatlarimiz</a></li>
                <li><a href="#facts">Statistika</a></li>
                <li><a href="#contact">Biz bilan aloqa</a></li>
                @if (Route::has('login'))
                <li>
                    @auth
                        <a href="{{ url('/dashboard') }}">Admin Panel</a>
                    @else
                        <a href="{{ route('login') }}">Admin Panel</a>
                    @endauth
                </li>
                @endif
            </ul>
        </nav><!-- #nav-menu-container -->
    </div>
</header><!-- #header -->
