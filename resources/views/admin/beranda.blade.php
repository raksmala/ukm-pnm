@extends('layouts.admin.app')
@section('content')
<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <h4 class="page-title">Beranda</h4>
        <p class="text-muted page-title-alt">Selamat Datang Admin {{ Auth()->user()->name }}</p>
    </div>
</div>

<div class="row">
    <div class="col-lg-3 col-sm-6">
        <div class="widget-panel widget-style-2 bg-white">
            <i class="md md-group text-primary"></i>
            <h2 class="m-0 text-dark counter font-600">{{ $anggota }}</h2>
            <div class="text-muted m-t-5">Anggota</div>
        </div>
    </div>
    <div class="col-lg-3 col-sm-6">
        <div class="widget-panel widget-style-2 bg-white">
            <i class="md md-assignment text-pink"></i>
            <h2 class="m-0 text-dark counter font-600">{{ $proker }}</h2>
            <div class="text-muted m-t-5">Program Kerja</div>
        </div>
    </div>
    <div class="col-lg-4 col-sm-6">
        <div class="widget-panel widget-style-2 bg-white">
            <i class="md md-event-note text-info"></i>
            <h2 class="m-0 text-dark font-600">{{ $tanggal }}</h2>
            <div class="text-muted m-t-5">Jadwal Terdekat</div>
        </div>
    </div>
</div>

@if ($informasi != null)
    <form action="/admin/info/update" method="post" role="form" autocomplete="off">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <div class="row">
            <div class="form-group">
            <input type="hidden" id="idInformasi" name="idInformasi" value="{{ $informasi->idInformasi }}">
                <label class="col-md-2 control-label"><p style="text-align: left;">Deskripsi UKM</p></label>
                <div class="col-md-5">
                    <textarea class='form-control' id='isiInformasi' name='isiInformasi' rows='10'>{{ $informasi->isiInformasi }}</textarea>                        
                </div>
                @if ($errors->has('isiInformasi'))
                    <strong style="color:white;">{{ $errors->first('isiInformasi') }}</strong>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
            </div>
            <button type="submit" class="btn btn-inverse btn-rounded waves-effect waves-light" style="text-align: left; margin: 10px 20px 20px 10px;">Simpan</button>
        </div>
    </form>
@else
    <form action="/admin/info/tambah" method="post" role="form" autocomplete="off">
        {{ csrf_field() }}
        <div class="row">
            <div class="form-group">
                <label class="col-md-2 control-label"><p style="text-align: left;">Deskripsi UKM</p></label>
                <div class="col-md-5">
                    <textarea class='form-control' id='isiInformasi' name='isiInformasi' rows='10'></textarea>                        
                </div>
                @if ($errors->has('isiInformasi'))
                    <strong style="color:white;">{{ $errors->first('isiInformasi') }}</strong>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
            </div>
            <button type="submit" class="btn btn-inverse btn-rounded waves-effect waves-light" style="text-align: left; margin: 10px 20px 20px 10px;">Simpan</button>
        </div>
    </form>
@endif
@endsection
@section('scripts')
@if(Session::has('message'))
  <script type="text/javascript">
    @if(Session::has('sukses'))
        $(document).ready(function(){
            $.Notification.autoHideNotify('success', 'bottom right', "{!! Session::get('sukses') !!}");
        });
    @endif
    $(document).ready(function(){
        console.log("Berhasil masuk ukm");
      $.Notification.autoHideNotify('success', 'bottom right', "{!! Session::get('message') !!}", "{{ Auth()->user()->name }}");
    });
  </script>
@endif
@endsection