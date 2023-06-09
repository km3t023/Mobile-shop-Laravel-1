<nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
    <div class="container">
    <a href="{{ route('welcome') }}" style="font-family:Spectral;" class="navbar-brand shadow-sm" margin: 20px;><b>MOBILE SHOP</b></a>
    <ul class="navbar-nav ms-auto shadow-sm ">
        @if (Route::has('login'))
            @auth
                <li class="nav-item">
                    <a href="{{ url('/home') }}" style="font-family:Spectral;" class="nav-link text-light"><b>MOJ PROFIL</b></a>
                </li>

            @else
                <li class="nav-time">
                    <a href="{{ route('login') }}" style="font-family:Spectral;" class="nav-link text-light"><b>ULOGUJ SE</b></a>
                </li>
            @if (Route::has('register'))
                <li class="nav-item">
                    <a href="{{ route('register') }}" style="font-family:Spectral;" class="nav-link text-light"><b>REGISTRUJ SE</b></a>
                </li>
            @endif
            @endauth
        @endif
    </ul>
    </div>
</nav>