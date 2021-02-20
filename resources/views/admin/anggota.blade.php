@extends('layouts.admin.app')
@section('content')
<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <h4 class="page-title">Anggota</h4>
        <p class="text-muted page-title-alt">Anggota Tetap UKM Badminton</p>
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
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Jabatan</th>
                    <th>Program Studi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Rendy Kharisma Aksmala</td>
                    <td>183307050</td>
                    <td>1</td>
                    <td>Teknologi Informasi 4A</td>
                    <td><a href='#' class='on-default edit-row btn btn-primary' data-toggle="modal" data-target="#tambah-modal"><i class='fa fa-pencil'></i></a>
                        <a href='#' class='on-default delete-row btn btn-danger' id="danger-alert"><i class='fa fa-trash'></i></a>
                    </td>
                </tr>               
            </tbody>
        </table>
    </div>
</div>

<div id="tambah-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Data Anggota</h4>
            </div>
            <form action="" method="post" role="form" autocomplete="off">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="control-label">NIM</label>
                                <input type="text" class="form-control" id="NIMAnggota" name="NIMAnggota">
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="form-group">
                                <label class="control-label">Nama</label>
                                <input type="text" class="form-control" id="namaAnggota" name="namaAnggota">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="ukm">Jabatan</label>
                                <select class="form-control" id="jabatanAnggota" name="jabatanAnggota">
                                    <option>Ketua</option>
                                    <option>Wakil Ketua</option>
                                    <option>Sekretaris I</option>
                                    <option>Sekretaris II</option>
                                    <option>Bendahara I</option>
                                    <option>Bendahara II</option>
                                    <option>Koordinator</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="prodi">Program Studi</label>
                                <input type="text" id="prodi" name="prodi" required class="form-control" readonly="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-info waves-effect waves-light">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div><!-- /.modal -->
@endsection