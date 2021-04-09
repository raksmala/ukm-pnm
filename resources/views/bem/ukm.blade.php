@extends('layouts.admin.app')
@section('content')
<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <h4 class="page-title">UKM</h4>
        <p class="text-muted page-title-alt">Unit Kegiatan Mahasiswa</p>
    </div>
</div>

<div class="col-lg-12">
    <div class="card-box table-responsive">
        <div style="width: 100%; text-align: right; margin-bottom: 10px;">
            <a href="#" class="on-default edit-row btn btn-success" data-toggle="modal" data-target="#tambah-modal"><i class="fa fa-plus"></i></a>
        </div>

        <table id="datatable" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama UKM</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ukm as $data)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->namaUKM }}</td>
                    <td><a href='#' class='on-default edit-row btn btn-primary' data-toggle="modal" data-target="#edit-modal" onclick="setEditForm('{{ $data->idUKM }}', '{{ $data->namaUKM }}', '{{ $data->user->email }}', '{{ $data->user->username }}', '{{ $data->user->foto }}')"><i class='fa fa-pencil'></i></a>
                        <a href='#' class='on-default delete-row btn btn-danger delete-ukm' idUKM="{{ $data->idUKM }}" namaUKM="{{ $data->namaUKM }}"><i class='fa fa-trash'></i></a>
                    </td>
                </tr>  
                @endforeach                  
            </tbody>
        </table>
    </div>
</div>

<div id="tambah-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Data Kegiatan</h4>
            </div>
            <form action="/bem/ukm/tambah" method="post" role="form" autocomplete="off">
            {{ csrf_field() }}
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">Nama UKM</label>
                                <input type="text" class="form-control" id="namaUKM" name="namaUKM">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-info waves-effect waves-light">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div><!-- /.modal -->

<div id="edit-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Data Kegiatan</h4>
            </div>
            <form action="/bem/ukm/update" method="post" role="form" autocomplete="off" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="hidden" id="editIdUKM" name="editIdUKM">
                                <label class="control-label">Nama UKM</label>
                                <input type="text" class="form-control" id="editNamaUKM" name="editNamaUKM">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">Email</label>
                                <input type="text" class="form-control" id="editEmail" name="editEmail">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">Username</label>
                                <input type="text" class="form-control" id="editUsername" name="editUsername">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">Password</label>
                                <input type="text" class="form-control" id="editPassword" name="editPassword" placeholder="Kosongi jika tidak ingin merubah/menambah password">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">Foto</label>
                                <input type="file" class="filestyle" id="editFoto" name="editFoto" data-buttontext="Unggah Logo" data-buttonname="btn-default" accept="image/x-png">
                            </div>
                        </div>
                    </div>
                            
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-info waves-effect waves-light">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div><!-- /.modal -->
@endsection
@section('scripts')
<script type="text/javascript">
    function setEditForm(idUKM, namaUKM, email, username, foto) {
        document.getElementById('editIdUKM').value = idUKM;
        document.getElementById('editNamaUKM').value = namaUKM;
        document.getElementById('editEmail').value = email;
        document.getElementById('editUsername').value = username;
        document.getElementById('editFoto').value = foto;
    }
    
    $('.delete-ukm').click(function(){
        var idUKM = $(this).attr('idUKM');
        var namaUKM = $(this).attr('namaUKM');
        swal({
            title: "Yakin ?",
            text: "Menghapus Data UKM " +namaUKM+ " ?",
            icon: "error",
            buttons: ["Batal", "Hapus"],
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                window.location = "/bem/ukm/hapus/" + idUKM;
            }
        });
        event.preventDefault();
    });
</script>
@endsection