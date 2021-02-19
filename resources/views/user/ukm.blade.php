@extends('layouts.user.app')
@section('contentTop')
<div data-aos="fade-right" data-aos-duration="1000" style="color: #ffffff; text-align: center; margin-top: 8rem;">
    <div class="container">
        <div class="col-md-12 col-sm-12 px-0 mx-0">
            <img src="{{ asset('/assets/images/logo/badminton.png') }}" style="width: 250px; height: 250px;"></img>
            <h3 class="display-4">UKM Badminton</h3>
        </div>
    </div>
</div>
@endsection
@section('content')
<div class="page-content">
  <div>
    <div class="da-section bg-secondary">
      <div class="container">
        <div class="h3 pb-3 text-center text-white" data-aos="fade-up">UKM Badminton</div>
          <p class="px-5 pb-5 text-center text-white" data-aos="fade-up">Unit Kegiatan Mahasiswa Badminton adalah wadah aktivitas kemahasiswaan untuk mengembangkan minat, bakat dan keahlian dalam bidang olahraga badminton bagi para anggota-anggotanya.</p>
          <div class="h3 text-center" data-aos="fade-up" style="color: #ffffff;">Pengurus UKM Badminton</div>
        </div>
  <div class="da-team carousel slide py-5" id="da-carouselIndicator" data-ride="carousel" data-aos="zoom-in-up" data-aos-duration="1000">
    <div class="container">
      <ol class="carousel-indicators">
        <li class="active" data-target="#da-carouselIndicator" data-slide-to="0"></li>
        <li data-target="#da-carouselIndicator" data-slide-to="1"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="row">
            <div class="col-md-4">
              <div class="card-body text-center">
                <i class="text-primary fa fa-user fa-3x" style="color: #ffffff; margin-bottom: 20px;"></i>
                <div class="h5">Rendy Kharisma Aksmala</div>
                <p class="text-muted">Ketua</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card-body text-center">
                <i class="text-primary fa fa-user fa-3x" style="color: #ffffff; margin-bottom: 20px;"></i>
                <div class="h5">Irfani A</div>
                <p class="text-muted">Wakil Ketua</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card-body text-center">
                <i class="text-primary fa fa-user fa-3x" style="color: #ffffff; margin-bottom: 20px;"></i>
                <div class="h5">Rezy Andrean</div>
                <p class="text-muted">Sekretaris</p>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="row">
          <div class="col-md-4">
              <div class="card-body text-center">
                <i class="text-primary fa fa-user fa-3x" style="color: #ffffff; margin-bottom: 20px;"></i>
                <div class="h5">Novendra Ilham</div>
                <p class="text-muted">Bendahara</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card-body text-center">
                <i class="text-primary fa fa-user fa-3x" style="color: #ffffff; margin-bottom: 20px;"></i>
                <div class="h5">Nadia Haya</div>
                <p class="text-muted">Koordinator Kegiatan</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card-body text-center">
                <i class="text-primary fa fa-user fa-3x" style="color: #ffffff; margin-bottom: 20px;"></i>
                <div class="h5">Ayu Risqi</div>
                <p class="text-muted">Koordinator Humas</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="da-section bg-light" id="layanan">
  <div class="da-services">
    <div class="container text-center">
      <div id="calendar"></div>
    </div>
  </div>
</div>
@endsection
@section('script')
<script type="text/javascript">
  $(document).ready(function() {
      $('#calendar').fullCalendar({

      });
  });
</script>
<script type="text/javascript">
  document.addEventListener('DOMContentLoaded', function() {
  var calendarEl = document.getElementById('calendar');
  var jadwal2 = '[{"title":"Musyawarah Besar","start":"2021-02-11","end":"2021-02-11"},{"title":"Malam Keakraban","start":"2021-02-13","end":"2021-02-13"},{"title":"Seminar Covid-19","start":"2021-03-01","end":"2021-03-01"}]';
  var tanggal = '2021-02-18';

  var calendar = new FullCalendar.Calendar(calendarEl, {
    plugins: [ 'interaction', 'dayGrid', 'timeGrid' ],
    defaultView: 'dayGridMonth',
    defaultDate: tanggal,
    header: {
      left: 'prev,next today',
      center: 'title',
      right: 'dayGridMonth,timeGridWeek,timeGridDay'
    },
    events: JSON.parse(jadwal2)
  });

  calendar.render();
});
</script>
@endsection