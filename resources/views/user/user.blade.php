@extends('layouts.user.app')
@section('contentTop')
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
    <div class="row">
      <div class="col-md-4">
        <div class="card mb-3" data-aos="flip-left">
          <div class="card-body mt-4 mb-1 text-center" style="max-width: 350px; max-height: 500px;"><img src="{{ asset('/assets/images/logo/badminton.png') }}" style="width: 50%; height: 50%; margin-bottom:20px;'">
            <div class="h4 pb-3">Badminton</div>
            <p>Unit Kegiatan Mahasiswa Badminton adalah wadah aktivitas kemahasiswaan untuk mengembangkan minat, bakat dan keahlian bagi para anggota-anggotanya.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-3" data-aos="zoom-in-up">
          <div class="card-body mt-4 mb-1 text-center" style="max-width: 350px; max-height: 500px;"><img src="{{ asset('/assets/images/logo/basket.png') }}" style="width: 50%; height: 50%; margin-bottom:20px;'">
            <div class="h4 pb-3">Basket</div>
            <p>Unit Kegiatan Mahasiswa Basket adalah wadah aktivitas kemahasiswaan untuk mengembangkan minat, bakat dan keahlian bagi para anggota-anggotanya.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-3" data-aos="flip-right">
          <div class="card-body mt-4 mb-1 text-center" style="max-width: 350px; max-height: 500px;"><img src="{{ asset('/assets/images/logo/cakra.png') }}" style="width: 50%; height: 50%; margin-bottom:20px;'">
            <div class="h4 pb-3">Cakra</div>
            <p>Unit Kegiatan Mahasiswa Cakra adalah wadah aktivitas kemahasiswaan untuk mengembangkan minat, bakat dan keahlian bagi para anggota-anggotanya.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="card mb-3" data-aos="flip-left">
          <div class="card-body mt-4 mb-1 text-center" style="max-width: 350px; max-height: 500px;"><img src="{{ asset('/assets/images/logo/futsal.png') }}" style="width: 50%; height: 50%; margin-bottom:20px;'">
            <div class="h4 pb-3">Futsal</div>
            <p>Unit Kegiatan Mahasiswa Futsal adalah wadah aktivitas kemahasiswaan untuk mengembangkan minat, bakat dan keahlian bagi para anggota-anggotanya.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-3" data-aos="zoom-in-up">
          <div class="card-body mt-4 mb-1 text-center" style="max-width: 350px; max-height: 500px;"><img src="{{ asset('/assets/images/logo/gplasma.png') }}" style="width: 50%; height: 50%; margin-bottom:20px;'">
            <div class="h4 pb-3">G-Plasma</div>
            <p>Unit Kegiatan Mahasiswa G-Plasma adalah wadah aktivitas kemahasiswaan untuk mengembangkan minat, bakat dan keahlian bagi para anggota-anggotanya.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-3" data-aos="flip-right">
          <div class="card-body mt-4 mb-1 text-center" style="max-width: 350px; max-height: 500px;"><img src="{{ asset('/assets/images/logo/ipsi.png') }}" style="width: 50%; height: 50%; margin-bottom:20px;'">
            <div class="h4 pb-3">Pencak Silat</div>
            <p>Unit Kegiatan Mahasiswa Pencak Silat adalah wadah aktivitas kemahasiswaan untuk mengembangkan minat, bakat dan keahlian bagi para anggota-anggotanya.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="card mb-3" data-aos="flip-left">
          <div class="card-body mt-4 mb-1 text-center" style="max-width: 350px; max-height: 500px;"><img src="{{ asset('/assets/images/logo/kwu.png') }}" style="width: 50%; height: 50%; margin-bottom:20px;'">
            <div class="h4 pb-3">Kewirausahaan</div>
            <p>Unit Kegiatan Mahasiswa Kewirausahaan adalah wadah aktivitas kemahasiswaan untuk mengembangkan minat, bakat dan keahlian bagi para anggota-anggotanya.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-3" data-aos="zoom-in-up">
          <div class="card-body mt-4 mb-1 text-center" style="max-width: 350px; max-height: 500px;"><img src="{{ asset('/assets/images/logo/menwa.png') }}" style="width: 50%; height: 50%; margin-bottom:20px;'">
            <div class="h4 pb-3">Resimen Mahasiswa</div>
            <p>Unit Kegiatan Mahasiswa Resimen Mahasiswa adalah wadah aktivitas kemahasiswaan untuk mengembangkan minat, bakat dan keahlian bagi para anggota-anggotanya.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-3" data-aos="flip-right">
          <div class="card-body mt-4 mb-1 text-center" style="max-width: 350px; max-height: 500px;"><img src="{{ asset('/assets/images/logo/musican2.png') }}" style="width: 50%; height: 50%; margin-bottom:20px;'">
            <div class="h4 pb-3">Musican</div>
            <p>Unit Kegiatan Mahasiswa Musican adalah wadah aktivitas kemahasiswaan untuk mengembangkan minat, bakat dan keahlian bagi para anggota-anggotanya.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="card mb-3" data-aos="flip-left">
          <div class="card-body mt-4 mb-1 text-center" style="max-width: 350px; max-height: 500px;"><img src="{{ asset('/assets/images/logo/niknema.png') }}" style="width: 50%; height: 50%; margin-bottom:20px;'">
            <div class="h4 pb-3">Niknema</div>
            <p>Unit Kegiatan Mahasiswa Niknema adalah wadah aktivitas kemahasiswaan untuk mengembangkan minat, bakat dan keahlian bagi para anggota-anggotanya.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-3" data-aos="zoom-in-up">
          <div class="card-body mt-4 mb-1 text-center" style="max-width: 350px; max-height: 500px;"><img src="{{ asset('/assets/images/logo/padus.png') }}" style="width: 50%; height: 50%; margin-bottom:20px;'">
            <div class="h4 pb-3">Paduan Suara</div>
            <p>Unit Kegiatan Mahasiswa Paduan Suara adalah wadah aktivitas kemahasiswaan untuk mengembangkan minat, bakat dan keahlian bagi para anggota-anggotanya.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-3" data-aos="flip-right">
          <div class="card-body mt-4 mb-1 text-center" style="max-width: 350px; max-height: 500px;"><img src="{{ asset('/assets/images/logo/pals.png') }}" style="width: 50%; height: 50%; margin-bottom:20px;'">
            <div class="h4 pb-3">Pals</div>
            <p>Unit Kegiatan Mahasiswa Pals adalah wadah aktivitas kemahasiswaan untuk mengembangkan minat, bakat dan keahlian bagi para anggota-anggotanya.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="card mb-3" data-aos="flip-left">
          <div class="card-body mt-4 mb-1 text-center" style="max-width: 350px; max-height: 500px;"><img src="{{ asset('/assets/images/logo/pramuka.png') }}" style="width: 50%; height: 50%; margin-bottom:20px;'">
            <div class="h4 pb-3">Pramuka</div>
            <p>Unit Kegiatan Mahasiswa Pramuka adalah wadah aktivitas kemahasiswaan untuk mengembangkan minat, bakat dan keahlian bagi para anggota-anggotanya.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-3" data-aos="zoom-in-up">
          <div class="card-body mt-4 mb-1 text-center" style="max-width: 350px; max-height: 500px;"><img src="{{ asset('/assets/images/logo/stupa.png') }}" style="width: 50%; height: 50%; margin-bottom:20px;'">
            <div class="h4 pb-3">Teater Stupa</div>
            <p>Unit Kegiatan Mahasiswa Teater Stupa adalah wadah aktivitas kemahasiswaan untuk mengembangkan minat, bakat dan keahlian bagi para anggota-anggotanya.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-3" data-aos="flip-right">
          <div class="card-body mt-4 mb-1 text-center" style="max-width: 350px; max-height: 500px;"><img src="{{ asset('/assets/images/logo/taekwondo.png') }}" style="width: 50%; height: 50%; margin-bottom:20px;'">
            <div class="h4 pb-3">Taekwondo</div>
            <p>Unit Kegiatan Mahasiswa Taekwondo adalah wadah aktivitas kemahasiswaan untuk mengembangkan minat, bakat dan keahlian bagi para anggota-anggotanya.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="card mb-3" data-aos="flip-left">
          <div class="card-body mt-4 mb-1 text-center" style="max-width: 350px; max-height: 500px;"><img src="{{ asset('/assets/images/logo/tari.png') }}" style="width: 50%; height: 50%; margin-bottom:20px;'">
            <div class="h4 pb-3">Tari</div>
            <p>Unit Kegiatan Mahasiswa Tari adalah wadah aktivitas kemahasiswaan untuk mengembangkan minat, bakat dan keahlian bagi para anggota-anggotanya.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-3" data-aos="zoom-in-up">
          <div class="card-body mt-4 mb-1 text-center" style="max-width: 350px; max-height: 500px;"><img src="{{ asset('/assets/images/logo/ukki.png') }}" style="width: 50%; height: 50%; margin-bottom:20px;'">
            <div class="h4 pb-3">UKKI</div>
            <p>Unit Kegiatan Mahasiswa Kerohanian Islam adalah wadah aktivitas kemahasiswaan untuk mengembangkan minat, bakat dan keahlian bagi para anggota-anggotanya.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-3" data-aos="flip-right">
          <div class="card-body mt-4 mb-1 text-center" style="max-width: 350px; max-height: 500px;"><img src="{{ asset('/assets/images/logo/voli.png') }}" style="width: 50%; height: 50%; margin-bottom:20px;'">
            <div class="h4 pb-3">Voli</div>
            <p>Unit Kegiatan Mahasiswa Voli adalah wadah aktivitas kemahasiswaan untuk mengembangkan minat, bakat dan keahlian bagi para anggota-anggotanya.</p>
          </div>
        </div>
      </div>
    </div>
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
          <div class="card mb-3">
            <div class="card-body py-5" data-aos="zoom-in" data-aos-duration="1000">
              <div class="text-primary"><i class="pb-3 fas fa-users fa-3x"></i>
                <p class="font-weight-bold">Daftar UKM</p>
              </div>
              <p>Menu untuk memilih dan bergabung salah satu atau lebih UKM yang ada di Politeknik Negeri Madiun.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="card mb-3">
            <div class="card-body py-5" data-aos="zoom-in" data-aos-duration="1500">
              <div class="text-primary"><i class="pb-3 fas fa-edit fa-3x"></i>
                <p class="font-weight-bold">Kritik & Saran</p>
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