<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ secure_asset('assets/images/logo/km.png') }}">
    <title>UKM Politeknik Negeri Madiun</title>
    <meta name="description" content="Unit Kegiatan Mahasiswa Politeknik Negeri Madiun"/>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" rel="stylesheet">
    <link href="{{ secure_asset('/assets/css/aos.css') }}" rel="stylesheet">
    <link href="{{ secure_asset('/assets/css/ekko-lightbox.css') }}" rel="stylesheet">
    <link href="{{ secure_asset('/assets/styles/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ secure_asset('/assets/styles/main.css') }}" rel="stylesheet">
    <link href="{{ secure_asset('/assets/styles/pages.css') }}" rel="stylesheet">

    <!-- script kalender -->
    <link href="{{ secure_asset('/assets/scripts/packages/core/main.min.css') }}" rel='stylesheet' />
    <link href="{{ secure_asset('/assets/scripts/packages/daygrid/main.min.css') }}" rel='stylesheet' />
    <link href="{{ secure_asset('/assets/scripts/packages/timegrid/main.min.css') }}" rel='stylesheet' />

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <script src="{{ secure_asset('/assets/js/aos.js') }}"></script>
    <script src="{{ secure_asset('/assets/js/ekko-lightbox.min.js') }}"></script>
    <script src="{{ secure_asset('/assets/js/particles.min.js') }}"></script>
    <script>
      particlesJS.load('particles-js', "{{ secure_asset('/assets/particles.json')}}", function() {
        console.log('callback - particles.js config loaded');
      });
    </script>
    <script src="{{ secure_asset('/assets/scripts/main.js') }}"></script>
  </head>
  <body id="top">
    <header>
      <div class="container pt-4">
        <div id="particles-js"></div>
        @include('layouts.user.nav')
      </div>
    @yield('contentTop')
    </header>
    @yield('content')
    <footer class="bg-footer da-section" id="kontak">
      <div class="container text-white">
        <div class="row">
          <div class="col-md-4">
            <div class="h2">Hai!</div>
            <p class="mb-0">sekretariat.bempnm@gmail.com</p>
          </div>
          <div class="col-md-4">
            <div class="h6 pb-2">Kontak</div>
            <ul>
              <li><a class="da-social-link" href="https://twitter.com/BemPnm">Twitter</a></li>
              <li><a class="da-social-link" href="https://www.facebook.com/bempolitekniknegerimadiun">Facebook</a></li>
              <li><a class="da-social-link" href="https://www.instagram.com/bem_kmpnm/">Instagram</a></li>
              <li><a class="da-social-link" href="mailto:sekretariat.bempnm@gmail.com?Subject=Bertanya">Mail</a></li>
            </ul>
          </div>
          <div class="col-md-4">
            <div class="h6 pb-2">Copyright</div>
            <p>&copy; 2021 Rendy Kharisma Aksmala</p>
          </div>
        </div>
      </div>
    </footer>
    <div id="scrolltop">
      <button class="btn btn-primary"><span class="icon"><i class="fas fa-angle-up fa-2x"></i></span></button>
    </div>

    <!-- jQuery  -->
    <script src="{{ secure_asset('/assets/js/jquery.min.js') }}"></script>
    <script src="{{ secure_asset('/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ secure_asset('/assets/js/detect.js') }}"></script>
    <script src="{{ secure_asset('/assets/js/fastclick.js') }}"></script>
    <script src="{{ secure_asset('/assets/js/jquery.slimscroll.js') }}"></script>
    <script src="{{ secure_asset('/assets/js/jquery.blockUI.js') }}"></script>
    <script src="{{ secure_asset('/assets/js/waves.js') }}"></script>
    <script src="{{ secure_asset('/assets/js/wow.min.js') }}"></script>
    <script src="{{ secure_asset('/assets/js/jquery.nicescroll.js') }}"></script>
    <script src="{{ secure_asset('/assets/js/jquery.scrollTo.min.js') }}"></script>

    <script src="{{ secure_asset('/assets/plugins/jquery-ui/jquery-ui.min.js') }}"></script>

    <!-- script kalender -->
    <script src="{{ secure_asset('/assets/scripts/packages/core/main.min.js') }}"></script>
    <script src="{{ secure_asset('/assets/scripts/packages/interaction/main.min.js') }}"></script>
    <script src="{{ secure_asset('/assets/scripts/packages/daygrid/main.min.js') }}"></script>
    <script src="{{ secure_asset('/assets/scripts/packages/timegrid/main.min.js') }}"></script>

    <!-- Tost-->
    <script src="{{ secure_asset('/assets/libs/jquery-toast-plugin/jquery.toast.min.js') }}"></script>

    <!-- toastr init js-->
    <script src="{{ secure_asset('/assets/js/pages/toastr.init.js') }}"></script>

    <!-- App core js -->
    <script src="{{ secure_asset('/assets/js/jquery.core.js') }}"></script>
    <script src="{{ secure_asset('/assets/js/jquery.app.js') }}"></script>

    @yield('script')
  </body>
</html>