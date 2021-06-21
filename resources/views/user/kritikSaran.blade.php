@extends('layouts.user.app')
@section('contentTop')
<div data-aos="fade-right" data-aos-duration="1000" style="color: #ffffff; text-align: center; margin-top: 12rem;">
    <div class="container">
        <div class="col-md-12 col-sm-12 px-0 mx-0">
            <h3 class="display-3">Kritik & Saran</h3>
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
                    <h4 class="m-t-0 header-title text-center" style="margin-bottom: 3rem;"><b>Form Kritik & Saran</b></h4>
                    <form action="/kritikSaran/tambah" method="post" role="form" autocomplete="off">
                    {{ csrf_field() }}
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" id="namaMahasiswa" name="namaMahasiswa" placeholder="Kosongi jika ingin sebagai Anonim" class="form-control">
                            @if ($errors->has('namaMahasiswa'))
                                <strong style="color:white;">{{ $errors->first('namaMahasiswa') }}</strong>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="ukm">Sasaran</label>
                            <select class="form-control" id="idUKM" name="idUKM">
                                @foreach($ukm as $data)
                                <option value="{{ $data->idUKM }}">{{ $data->namaUKM }}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('idUKM'))
                                <strong style="color:white;">{{ $errors->first('idUKM') }}</strong>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="kritik">Kritik & Saran</label>
                            <textarea class="form-control" rows="5" id="isiKritikSaran" name="isiKritikSaran"></textarea>
                            @if ($errors->has('isiKritikSaran'))
                                <strong style="color:white;">{{ $errors->first('isiKritikSaran') }}</strong>
                            @endif
                        </div>
                        <div class="form-group text-right m-b-0">
                            <button type="submit" class="btn btn-primary waves-effect waves-light">Kirim</button>
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
    @if(Session::has('success'))
        $(document).ready(function(){
            $.Notification.autoHideNotify('success', 'bottom right', "{!! Session::get('success') !!}");
        });
    @endif
</script>
@endsection