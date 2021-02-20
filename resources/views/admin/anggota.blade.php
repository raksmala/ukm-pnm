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
                    <td><a href='#' class='on-default edit-row btn btn-primary'><i class='fa fa-pencil'></i></a>
                        <a href='#' class='on-default delete-row btn btn-danger'><i class='fa fa-trash'></i></a>
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
                <h4 class="modal-title">Modal Content is Responsive</h4>
            </div>
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
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="field-3" class="control-label">Jabatan</label>
                            <input type="text" class="form-control" id="field-3" placeholder="Address">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="field-4" class="control-label">City</label>
                            <input type="text" class="form-control" id="field-4" placeholder="Boston">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="field-5" class="control-label">Country</label>
                            <input type="text" class="form-control" id="field-5" placeholder="United States">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="field-6" class="control-label">Zip</label>
                            <input type="text" class="form-control" id="field-6" placeholder="123456">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group no-margin">
                            <label for="field-7" class="control-label">Personal Info</label>
                            <textarea class="form-control autogrow" id="field-7" placeholder="Write something about yourself" style="overflow: hidden; word-wrap: break-word; resize: horizontal; height: 104px;"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-info waves-effect waves-light">Save changes</button>
            </div>
        </div>
    </div>
</div><!-- /.modal -->
@endsection