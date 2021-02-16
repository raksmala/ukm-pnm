<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="{{ asset('/assets/images/logo/km.png') }}">
        <title>UKM Politeknik Negeri Madiun</title>

        <!--Morris Chart CSS -->
		<link rel="stylesheet" href="{{ asset('assets/plugins/morris/morris.css') }}">

        <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/core.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/components.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/pages.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/menu.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="{{ asset('assets/js/modernizr.min.js') }}"></script>

    </head>


    <body>


        <!-- Navigation Bar-->
        <header id="topnav">
            <div class="topbar-main">
                <div class="container">

                    <!-- Logo container-->
                    <div class="logo">
                        <a href="index.html" class="logo">UKM Badminton</a>
                    </div>
                    <!-- End Logo container-->

                    <div class="menu-extras">
                        <ul class="nav navbar-nav navbar-right pull-right">
                            <li class="dropdown navbar-c-items">
                                <a href="" class="dropdown-toggle waves-effect waves-light profile" data-toggle="dropdown" aria-expanded="true"><img src="{{ asset('assets/images/da-emp-2.jpg') }}" alt="user-img" class="img-circle"> </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#"><i class="ti-power-off text-danger m-r-10"></i> Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                        <div class="menu-item">
                            <!-- Mobile menu toggle-->
                            <a class="navbar-toggle">
                                <div class="lines">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                            <!-- End mobile menu toggle-->
                        </div>
                    </div>

                </div>
            </div>

            @include('section.nav')
        </header>
        <!-- End Navigation Bar-->


        <div class="wrapper">
            <div class="container">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="page-title">Beranda</h4>
                        <p class="text-muted page-title-alt">Selamat Datang Admin Badminton</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="widget-panel widget-style-2 bg-white">
                            <i class="md md-group text-primary"></i>
                            <h2 class="m-0 text-dark counter font-600">121</h2>
                            <div class="text-muted m-t-5">Anggota</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="widget-panel widget-style-2 bg-white">
                            <i class="md md-assignment text-pink"></i>
                            <h2 class="m-0 text-dark counter font-600">7</h2>
                            <div class="text-muted m-t-5">Program Kerja</div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="widget-panel widget-style-2 bg-white">
                            <i class="md md-event-note text-info"></i>
                            <h2 class="m-0 text-dark font-600">21 Februari 2021</h2>
                            <div class="text-muted m-t-5">Jadwal Terdekat</div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group">
                        <input type="hidden" id="idInformasi" name="idInformasi">
                        <label class="col-md-2 control-label"><p style="text-align: left;">Deskripsi UKM</p></label>
                        <div class="col-md-5">
                            <textarea class='form-control' id='isiInformasi' name='isiInformasi' rows='10'>Unit Kegiatan Mahasiswa (UKM).</textarea>                        
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-2">
                    </div>
                    <button type="submit" class="btn btn-inverse btn-rounded waves-effect waves-light" style="text-align: left; margin: 10px 20px 20px 10px;">Simpan</button>
                </div>

                <!-- Footer -->
                <footer class="footer text-right">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-6">
                                © 2016. All rights reserved.
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- End Footer -->

            </div>
        </div>



        <!-- jQuery  -->
        <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/detect.js') }}"></script>
        <script src="{{ asset('assets/js/fastclick.js') }}"></script>

        <script src="{{ asset('assets/js/jquery.slimscroll.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.blockUI.js') }}"></script>
        <script src="{{ asset('assets/js/waves.js') }}"></script>
        <script src="{{ asset('assets/js/wow.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.nicescroll.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.scrollTo.min.js') }}"></script>

        <script src="{{ asset('assets/plugins/peity/jquery.peity.min.js') }}"></script>

        <!-- jQuery  -->
        <script src="{{ asset('assets/plugins/waypoints/lib/jquery.waypoints.js') }}"></script>
        <script src="{{ asset('assets/plugins/counterup/jquery.counterup.min.js') }}"></script>

        <script src="{{ asset('assets/plugins/morris/morris.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/raphael/raphael-min.js') }}"></script>

        <script src="{{ asset('assets/plugins/jquery-knob/jquery.knob.js') }}"></script>

        <script src="{{ asset('assets/pages/jquery.dashboard.js') }}"></script>

        <script src="{{ asset('assets/js/jquery.core.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.app.js') }}"></script>

        <script type="text/javascript">
            jQuery(document).ready(function($) {
                $('.counter').counterUp({
                    delay: 100,
                    time: 1200
                });

                $(".knob").knob();

            });
        </script>


    </body>
</html>