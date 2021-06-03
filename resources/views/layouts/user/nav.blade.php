<nav class="navbar navbar-expand-lg navbar-dark bg-transparent px-0">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#da-navbarNav" aria-controls="da-navbarNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse text-uppercase" id="da-navbarNav">
    <ul class="navbar-nav ml-auto">
        <li class="nav-item"><a class="nav-link smooth-scroll" href="{{ secure_url('/#listukm') }}">UKM</a></li>
        <li class="nav-item"><a class="nav-link smooth-scroll" href="{{ secure_url('/#layanan') }}">Layanan</a></li>
        <li class="nav-item"><a class="nav-link smooth-scroll" href="{{ secure_url('/#kontak') }}">Kontak</a></li>
        @guest('mahasiswa')
        <li class="nav-item"><a class="nav-link smooth-scroll" href="{{ secure_url('/login/user') }}">Login</a></li>
        <li class="nav-item"><a class="nav-link smooth-scroll" href="{{ secure_url('/register') }}">Daftar</a></li>
        @endguest
        @auth('mahasiswa')
        <li class="nav-item"><a class="nav-link smooth-scroll">{{ Auth::guard('mahasiswa')->user()->NIM }}</a></li>
        <li class="nav-item">
            <a class="nav-link smooth-scroll" href="{{ secure_url('/logout') }}"
                onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                Logout
            </a>

            <form id="logout-form" action="{{ secure_url('/logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </li>
        @endauth
    </ul>
    </div>
</nav>