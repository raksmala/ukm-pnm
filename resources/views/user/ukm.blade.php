@extends('layouts.user.app')
@section('contentTop')
<div data-aos="fade-right" data-aos-duration="1000" style="color: #ffffff; text-align: center; margin-top: 8rem;">
    <div class="container">
        <div class="col-md-12 col-sm-12 px-0 mx-0">
            <img @if($ukm->user['foto'] != null) src="{{ secure_url('') }}/assets/images/logo/{{ $ukm->user['foto'] }}" @else src="{{ secure_url('') }}/assets/images/logo/km.png" @endif style="width: 250px; height: 250px;"></img>
            <h3 class="display-4">UKM {{ $ukm->namaUKM }}</h3>
        </div>
    </div>
</div>
@endsection
@section('content')
<div class="page-content">
  <div>
    <div class="da-section bg-secondary">
      <div class="container">
        <div class="h3 pb-3 text-center text-white" data-aos="fade-up">UKM {{ $ukm->namaUKM }}</div>
          <p class="px-5 pb-5 text-center text-white" data-aos="fade-up"> {{ $ukm->informasi['isiInformasi'] }}</p>
          <div class="h3 text-center" data-aos="fade-up" style="color: #ffffff;">Pengurus UKM {{ $ukm->namaUKM }}</div>
        </div>


@if($count != null)        
  <div class="da-team carousel slide py-5" id="da-carouselIndicator" data-ride="carousel" data-aos="zoom-in-up" data-aos-duration="1000">
    <div class="container">
      <ol class="carousel-indicators">
        @for($i = 0; $i < $count; $i++)
          <li @if($i == 0) 'class="active"' @endif data-target="#da-carouselIndicator" data-slide-to="{{ $i }}"></li>
        @endfor
      </ol>
      <div class="carousel-inner">
        @foreach($anggota->chunk(3) as $datas)
        <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
          <div class="row">
            @foreach($datas as $data)
              <div class="col-md-4">
                <div class="card-body text-center">
                  <i class="text-primary fa fa-user fa-3x" style="color: #ffffff; margin-bottom: 20px;"></i>
                  <div class="h5">{{ $data->namaAnggota }}</div>
                  <p class="text-muted">{{ ConvertJabatan::convertJabatan($data->jabatanAnggota) }}</p>
                </div>
              </div>
            @endforeach
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
@else 
  <div class="da-team carousel slide py-5" id="da-carouselIndicator" data-ride="carousel" data-aos="zoom-in-up" data-aos-duration="1000">
    <div class="container">
      <ol class="carousel-indicators">
          <li class="active" data-target="#da-carouselIndicator" data-slide-to="0"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="row">
            <div class="col-md-4">
              <div class="card-body text-center">
                <i class="text-primary fa fa-user fa-3x" style="color: #ffffff; margin-bottom: 20px;"></i>
                <div class="h5">Nama Pengurus</div>
                <p class="text-muted">Jabatan Pengurus</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card-body text-center">
                <i class="text-primary fa fa-user fa-3x" style="color: #ffffff; margin-bottom: 20px;"></i>
                <div class="h5">Nama Pengurus</div>
                <p class="text-muted">Jabatan Pengurus</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card-body text-center">
                <i class="text-primary fa fa-user fa-3x" style="color: #ffffff; margin-bottom: 20px;"></i>
                <div class="h5">Nama Pengurus</div>
                <p class="text-muted">Jabatan Pengurus</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endif
</div>
<div class="da-section bg-light" id="layanan">
  <div class="da-services">
    <div class="container text-center">
      <div id="calendar"></div>
    </div>
  </div>
</div>
@endsection
@section('scripts')
<script type="text/javascript">
  $(document).ready(function() {
      $('#calendar').fullCalendar({

      });
  });
</script>
<script type="text/javascript">
  document.addEventListener('DOMContentLoaded', function() {
  var calendarEl = document.getElementById('calendar');
  var getJadwal = {!! json_encode($jadwal->toArray()) !!};
  var jadwal2 = '[{"title":"Musyawarah Besar 2021","start":"2021-02-11","end":"2021-02-12"},{"title":"Malam Keakraban","start":"2021-02-13","end":"2021-02-13"},{"title":"Seminar Covid-19","start":"2021-03-01","end":"2021-03-01"}]';
  var tanggal = Date.now();

  for(i = 0; i < getJadwal.length; i++) {
    getJadwal[i].title = getJadwal[i].namaKegiatan;
    delete getJadwal[i].namaKegiatan;
    getJadwal[i].start = getJadwal[i].tanggalAwal;
    delete getJadwal[i].tanggalAwal;
    getJadwal[i].end = getJadwal[i].tanggalAkhir;
    delete getJadwal[i].tanggalAkhir;
  }

  console.log(JSON.stringify(getJadwal));
  console.log(jadwal2);

  var calendar = new FullCalendar.Calendar(calendarEl, {
    plugins: [ 'interaction', 'dayGrid', 'timeGrid' ],
    defaultView: 'dayGridMonth',
    defaultDate: tanggal,
    header: {
      left: 'prev,next today',
      center: 'title',
      right: 'dayGridMonth,timeGridWeek,timeGridDay'
    },
    events: getJadwal
  });

  calendar.render();
});
</script>
@endsection