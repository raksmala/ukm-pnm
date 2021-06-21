@extends('layouts.user.app')
@section('contentTop')
@if(session('sukses'))
  <script type="text/javascript">
    $(document).ready(function(){
      $.Notification.autoHideNotify('success', 'bottom right', "{!! Session::get('sukses') !!}");
    });
  </script>
@endif
<div data-aos="fade-right" data-aos-duration="1000" style="color: #ffffff; text-align: center; margin-top: 12rem;">
    <div class="container">
        <div class="col-md-12 col-sm-12 px-0 mx-0">
            <h3 class="display-3">Profil Mahasiswa</h3>
        </div>
    </div>
</div>
@endsection
@section('content')
<div class="page-content">
  <div>
    <div class="da-section bg-secondary">
      <div class="container">
        <div class="row">
            <div class="col-lg-6" style="margin: auto;">
                <div class="card-body">
                    <form action="/profil/update" class="form-horizontal" method="post" role="form" autocomplete="off">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                        <div class="form-group">
                            <label for="nama">NIM</label>
                            <input type="text" id="NIM" name="NIM" required class="form-control" value="{{ Auth::guard('mahasiswa')->user()->NIM }}" readonly>
                            @if ($errors->has('NIM'))
                                <strong style="color:white;">{{ $errors->first('NIM') }}</strong>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" id="nama" name="nama" required onchange="setProgramStudi()" class="form-control" value="{{ Auth::guard('mahasiswa')->user()->name }}" readonly>
                            @if ($errors->has('nama'))
                                <strong style="color:white;">{{ $errors->first('nama') }}</strong>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="nama">Program Studi</label>
                            <input type="text" id="programStudi" name="programStudi" required class="form-control" value="{{ Auth::guard('mahasiswa')->user()->programStudi }}" readonly>
                            @if ($errors->has('programStudi'))
                                <strong style="color:white;">{{ $errors->first('programStudi') }}</strong>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="kritik">Password</label>
                            <input type="password" id="password" name="password" required class="form-control" placeholder="Kosongi jika tidak ingin merubah/menambah password">
                        </div>

                        <div class="form-group text-right m-b-0">
                            <button class="btn btn-primary waves-effect waves-light" type="submit">Simpan</button>
                            <button type="reset" class="btn btn-default waves-effect waves-light m-l-5">Batal</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
@section('script')
<script type="text/javascript">
    @if(Session::has('success'))
        $(document).ready(function(){
            $.Notification.autoHideNotify('success', 'bottom right', "{!! Session::get('success') !!}");
        });
    @endif
    function setProgramStudi(){
        var NIM = $('#NIM').val();
        var tahun = "20" +NIM.substr(0,2)+ "";
        var prodi = NIM.substr(2,4);
        if(prodi == 3101) {
            var prodi = "Administrasi Bisnis";
        } else if(prodi == 3106) {
            var prodi = "Bahasa Inggris";
        } else if(prodi == 3202) {
            var prodi = "Komputerisasi Akuntansi";
        }  else if(prodi == 3209) {
            var prodi = "Akuntansi";
        } else if(prodi == 3303) {
            var prodi = "Mesin Otomotif";
        } else if(prodi == 3304) {
            var prodi = "Teknik Komputer Kontrol";
        } else if(prodi == 3305) {
            var prodi = "Teknik Listrik";
        } else if(prodi == 3307) {
            var prodi = "Teknologi Informasi";
        } else if(prodi == 3308) {
            var prodi = "Teknik Perkeretaapian";
        } else {
            var prodi = "(Program Studi)";
        }
        $('#programStudi').val(prodi+ " " +tahun);
    }
</script>
@endsection