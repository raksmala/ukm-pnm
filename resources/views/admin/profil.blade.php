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
                <div class="row" style="margin-top: 10px; text-align: center;">
                    <input type="file" class="filestyle" data-btnClass="btn-primary" data-badge="false" data-input="false" id="upload" name="upload" accept="image/*" data-text="Upload">
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
<div id="uploadImageModal" class="modal" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Crop &amp; Upload Logo Profil</h4>
                <button type="button" class="close" data-dismiss="modal" >
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="upload-demo-wrap">
                            <div id="upload-demo"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-success upload-result">Crop &amp; Upload</button>
            </div>
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
<script type="text/javascript">
    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
    });

    var $uploadCrop;

    function readFile(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            $('#uploadImageModal').modal('show');
            reader.onload = function (e) {
                $('.upload-demo').addClass('ready');
                $uploadCrop.croppie('bind', {
                    url: e.target.result
                }).then(function(){
                    console.log('jQuery bind complete');
                });
                
            }
            
            reader.readAsDataURL(input.files[0]);
        }
        else {
            swal("Sorry - you're browser doesn't support the FileReader API");
        }
    }

    $uploadCrop = $('#upload-demo').croppie({
        viewport: {
            width: 200,
            height: 200,
            type: 'square'
        },
        enableExif: true
    });

    $('#upload').on('change', function () { readFile.call(this); });
    $('.upload-result').on('click', function (event) {
        $uploadCrop.croppie('result', {
            type: 'canvas',
            size: 'viewport'
        }).then(function (response) {
            $.ajax({
                url:"{{ URL::to('/') }}/profil/logo",
                type:"POST",
                data:{"image": response},
                success:function(data) {
                    $('#uploadImageModal').modal('hide');
                    setTimeout(function(){
                        location.reload();
                    }, 2000);
                }
            });
        });
        reader.readAsDataURL(this.files[0]);
    });
</script>
@endsection