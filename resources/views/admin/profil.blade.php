@extends('layouts.admin.app')
@section('content')
<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <h4 class="page-title">Profil</h4>
        <p class="text-muted page-title-alt">Profil UKM {{ Auth()->user()->name }}</p>
    </div>
</div>
<div class="row">
    <div class="col-md-4 col-lg-3">
        <div class="profile-detail card-box">
            <div style="text-align: center;">
                <div class="row">
                    <img src="{{ secure_url('') }}/assets/images/logo/{{ Auth()->user()->foto }}" class="img-circle" alt="profile-image">
                </div>
                <div class="row" style="margin-top: 10px;">
                    <form action="/admin/profil/logo" class="form-horizontal" method="post" role="form" autocomplete="off">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                        <div style="display:none;">
                            <input type="file" class="form-control" id="uploadLogo" name="uploadLogo" style="display: none;" accept="image/*" onchange="document.getElementById('submitLogo').click();">
                        </div>
                        <button type="button" class="btn btn-primary btn-custom btn-rounded waves-effect waves-light" onclick="document.getElementById('uploadLogo').click();">Upload</button>
                        <button type="submit" id="submitLogo" name="submitLogo">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-9 col-md-8">
        <div class="card-box">
            <form action="/admin/profil/update" class="form-horizontal" method="post" role="form" autocomplete="off">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
                <div class="form-group">
                    <label class="col-md-2 control-label">Nama UKM</label>
                    <div class="col-md-10">
                        <input type="hidden" id="editIdUKM" name="editIdUKM" value="{{ $ukm->idUKM }}">
                        <input type="text" class="form-control" id="editNamaUKM" name="editNamaUKM" value={{ $ukm->namaUKM }}>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label">Email</label>
                    <div class="col-md-10">
                        <input type="email" class="form-control" id="editEmail" name="editEmail" value={{ $ukm->user->email }}>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label">Username</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="editUsername" name="editUsername" value={{ $ukm->user->username }}>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label">Password</label>
                    <div class="col-md-10">
                        <input type="password" class="form-control" id="editPassword" name="editPassword" placeholder="Kosongi jika tidak ingin merubah/menambah password">
                    </div>
                </div>
                <div style="text-align: right;">
                    <button type="submit" class="btn btn-white btn-custom btn-rounded waves-effect waves-light">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('scripts')
@if(Session::has('sukses'))
  <script type="text/javascript">
    $(document).ready(function(){
        console.log("Berhasil edit profil ukm");
      $.Notification.autoHideNotify('success', 'bottom right', "{!! Session::get('sukses') !!}");
    });
  </script>
@endif
@endsection