<nav class="navbar navbar-expand-lg navbar-dark bg-transparent px-0">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#da-navbarNav" aria-controls="da-navbarNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse text-uppercase" id="da-navbarNav">
    <ul class="navbar-nav ml-auto">
        <li class="nav-item"><a class="nav-link smooth-scroll" href="{{ url('/#listukm') }}">UKM</a></li>
        <li class="nav-item"><a class="nav-link smooth-scroll" href="{{ url('/#layanan') }}">Layanan</a></li>
        <li class="nav-item"><a class="nav-link smooth-scroll" href="{{ url('/#kontak') }}">Kontak</a></li>
        @guest('mahasiswa')
        <li class="nav-item"><a class="nav-link smooth-scroll" href="{{ route('userLogin') }}">Login</a></li>
        @endguest
        @auth('mahasiswa')
        <li class="nav-item"><a class="nav-link smooth-scroll">{{ Auth::guard('mahasiswa')->user()->NIM }}</a></li>
        <li class="nav-item">
            <a class="nav-link smooth-scroll" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                Logout
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </li>
        @endauth
    </ul>
    </div>
</nav>