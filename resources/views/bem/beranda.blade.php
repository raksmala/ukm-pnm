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
            <h2 class="m-0 text-dark counter font-600">{{ $ukm }}</h2>
            <div class="text-muted m-t-5">UKM</div>
        </div>
    </div>
    <div class="col-lg-3 col-sm-6">
        <div class="widget-panel widget-style-2 bg-white">
            <i class="md md-assignment text-pink"></i>
            <h2 class="m-0 text-dark counter font-600">{{ $proker }}</h2>
            <div class="text-muted m-t-5">Program Kerja UKM</div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
@if(Session::has('message'))
  <script type="text/javascript">
    $(document).ready(function(){
        console.log("Berhasil masuk bem");
      $.Notification.autoHideNotify('success', 'bottom right', 'Anda Berhasil Login');
    });
  </script>
@endif
@endsection