@extends('layouts.user.app')
@section('contentTop')
<div data-aos="fade-right" data-aos-duration="1000" style="color: #ffffff; text-align: center; margin-top: 12rem;">
    <div class="container">
        <div class="col-md-12 col-sm-12 px-0 mx-0">
            <h3 class="display-3">Login</h3>
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
                    <form action="{{ secure_url('/login/user') }}" method="post">
                        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                        <div class="form-group">
                            <label for="nama">NIM</label>
                            <input type="text" id="NIM" name="NIM" required class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="kritik">Password</label>
                            <input type="password" id="password" name="password" required class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="akun">Belum memiliki akun? <a href="{{ secure_url('/register') }}">Daftar disini.</a></label>
                        </div>

                        <div class="form-group text-right m-b-0">
                            <button class="btn btn-primary waves-effect waves-light" type="submit">Masuk</button>
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
@section('scripts')
<script type="text/javascript">
    @if(Session::has('regisSukses'))
        $(document).ready(function(){
            $.Notification.autoHideNotify('success', 'bottom right', "{!! Session::get('regisSukses') !!}");
        });
    @endif
    @if(Session::has('failLogin'))
        $.Notification.autoHideNotify('error', 'bottom right', "{!! Session::get('failLogin') !!}");
    @endif
</script>
@endsection
