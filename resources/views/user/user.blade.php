@extends('layouts.user.app')
@section('contentTop')
@if(session('message'))
  <script type="text/javascript">
    $.Notification.autoHideNotify('info', 'top left', {{ session('message') }},'');
  </script>
@endif
<div class="da-home-page-text" data-aos="fade-right" data-aos-duration="1000">
    <div class="container">
        <div class="col-md-10 col-sm-12 px-0 mx-0">
        <h2 class="display-3" style="margin-left:-6px;">Unit Kegiatan Mahasiswa</h2>
        <h3 class="h5 mt-3">Politeknik Negeri Madiun</h3>
        </div>
    </div>
</div>
@endsection
@section('content')
<div class="page-content">
      <div>
<div class="da-section da-work bg-secondary" id="listukm">
  <div class="container">
    <div class="h3 pb-3 text-center text-white" data-aos="fade-up">Unit Kegiatan Mahasiswa</div>
    <p class="px-5 pb-5 text-center text-white" data-aos="fade-up">Unit Kegiatan Mahasiswa (UKM) adalah wadah aktivitas kemahasiswaan untuk mengembangkan minat, bakat dan keahlian tertentu bagi para anggota-anggotanya. Lembaga ini merupakan bagian organisasi kemahasiswaan intra kampus lainnya seperti Dewan Perwakilan Mahasiswa dan Badan Eksekutif Mahasiswa.</p>
    @foreach($ukm->chunk(3) as $datas)
    <div class="row">
      @foreach($datas as $data)
      <div class="col-md-4">
        <div class="card mb-3" data-aos="flip-left" style="width: 350px; height: 300px;">
          <div class="card-body mt-4 mb-1 text-center"><img @if($data->user['foto'] != null) src="{{ secure_url('') }}/assets/images/logo/{{ $data->user['foto'] }}" @else src="{{ secure_url('') }}/assets/images/logo/km.png" @endif style="width: 120px; height: 120px; margin-bottom:20px;'">
            <form action="/ukm" method="post">
            {{ csrf_field() }}
              <input type="hidden" id="idUKM" name="idUKM" value="{{ $data->idUKM }}">
              <button type="submit" style="display: none;" id="submit{{ $data->idUKM }}"></button>
              <div class="h4 pb-3 link" onclick="document.getElementById('submit{{ $data->idUKM }}').click();">{{ $data->namaUKM }}</div>
            </form>
          </div>
        </div>
      </div>
      @endforeach
    </div>
    @endforeach
  </div>
</div>
<div class="da-section bg-gradient" id="layanan">
  <div class="da-services">
    <div class="container text-center">
      <div class="h3 pb-5 text-center" data-aos="fade-up"><h1 style="color: #ffffff;">Layanan</h1></div>
      <div class="row">
        <div class="col-lg-3 col-md-6">
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="card mb-3" href="{{ secure_url('/daftar') }}">
            <div class="card-body py-5" data-aos="zoom-in" data-aos-duration="1000">
              <div class="text-primary"><i class="pb-3 fas fa-users fa-3x"></i>
                <a href="{{ secure_url('/daftar') }}">
                  <p class="font-weight-bold">Daftar UKM</p>
                </a>
              </div>
              <p>Menu untuk memilih dan bergabung salah satu atau lebih UKM yang ada di Politeknik Negeri Madiun.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="card mb-3">
            <div class="card-body py-5" data-aos="zoom-in" data-aos-duration="1500">
              <div class="text-primary"><i class="pb-3 fas fa-edit fa-3x"></i>
                <a href="{{ secure_url('/kritikSaran') }}">
                  <p class="font-weight-bold">Kritik & Saran</p>
                </a>
              </div>
              <p>Menu untuk memberi Kritik dan Saran kepada BEM maupun UKM yang ada di Politeknik Negeri Madiun.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
        </div>
      </div>
    </div>
  </div>
</div>
@endsection