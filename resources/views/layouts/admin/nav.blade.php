<div class="navbar-custom">
    <div class="container">
        <div id="navigation">
            <!-- Navigation Menu-->
            <ul class="navigation-menu">
                <li class="has-submenu">
                    <a href="{{ secure_url('/admin/') }}"><i class="md md-home"></i>Beranda</a>
                </li>
                <li class="has-submenu">
                    <a href="#"><i class="md md-group"></i>Anggota</a>
                    <ul class="submenu">
                        <li>
                            <a href="{{ secure_url('/admin/anggota') }}">Anggota Tetap</a>
                        </li>
                        <li>
                            <a href="{{ secure_url('/admin/anggota/baru') }}">Anggota Baru</a>
                        </li>
                    </ul>
                </li>
                <li class="has-submenu">
                    <a href="#"><i class="md md-event-note"></i>Jadwal</a>
                    <ul class="submenu">
                        <li>
                            <a href="{{ secure_url('/admin/jadwal') }}">Jadwal Mendatang</a>
                        </li>
                        <li>
                            <a href="{{ secure_url('/admin/jadwal/lama') }}">Jadwal Terlewat</a>
                        </li>
                    </ul>
                </li>
                <li class="has-submenu">
                    <a href="{{ secure_url('/admin/proker') }}"><i class="md md-assignment"></i>Program Kerja</a>
                </li>
                <li class="has-submenu">
                    <a href="{{ secure_url('/admin/laporan') }}"><i class="md md-assignment-turned-in"></i>Laporan</a>
                </li>
            </ul>
            <!-- End navigation menu        -->
        </div>
    </div> <!-- end container -->
</div> <!-- end navbar-custom -->