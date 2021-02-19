<div class="navbar-custom">
    <div class="container">
        <div id="navigation">
            <!-- Navigation Menu-->
            <ul class="navigation-menu">
                <li class="has-submenu">
                    <a href="{{ url('/admin/') }}"><i class="md md-home"></i>Beranda</a>
                </li>
                <li class="has-submenu">
                    <a href="#"><i class="md md-group"></i>Anggota</a>
                </li>
                <li class="has-submenu">
                    <a href="{{ url('/admin/jadwal') }}"><i class="md md-event-note"></i>Jadwal</a>
                </li>
                <li class="has-submenu">
                    <a href="{{ url('/admin/proker') }}"><i class="md md-assignment"></i>Program Kerja</a>
                    <ul class="submenu">
                        <li>
                            <a href="#">Program Kerja BEM</a>
                        </li>
                        <li>
                            <a href="#">Program Kerja UKM</a>
                        </li>
                    </ul>
                </li>
                <li class="has-submenu">
                    <a href="{{ url('/admin/laporan') }}"><i class="md md-assignment-turned-in"></i>Laporan</a>
                    <ul class="submenu">
                        <li>
                            <a href="#">Laporan BEM</a>
                        </li>
                        <li>
                            <a href="#">Laporan UKM</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- End navigation menu        -->
        </div>
    </div> <!-- end container -->
</div> <!-- end navbar-custom -->