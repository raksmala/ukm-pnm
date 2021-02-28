@extends('layouts.admin.app')
@section('content')
<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <h4 class="page-title">Program Kerja</h4>
        <p class="text-muted page-title-alt">Program Kerja UKM</p>
    </div>
</div>

<div class="col-lg-12">
    <div class="card-box table-responsive">

        <table id="datatable-buttons" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama UKM</th>
                    <th>Nama Kegiatan</th>
                    <th>Tujuan</th>
                    <th>Tanggal Kegiatan</th>
                    <th>Lokasi Kegiatan</th>
                    <th>Sasaran</th>
                    <th>Tolak Ukur Kesuksesan</th>
                    <th>Penanggung Jawab</th>
                </tr>
            </thead>
            <tbody>  
                <tr>
                    <td>1</td>
                    <td>Badminton</td>
                    <td>Musyawarah Besar</td>
                    <td>Memberikan wadah kepada anggota UKM Badminton untuk membahas tentang AD/ART UKM Badminton</td>
                    <td>11 Februari 2021</td>
                    <td>Kampus 1 PNM</td>
                    <td>Seluruh anggota UKM Badminton</td>
                    <td>Dihadiri 1/2 N + 1 dari anggota UKM Badminton</td>
                    <td>Rendy Aksmala</td>
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
                <h4 class="modal-title">Data Program Kerja</h4>
            </div>
            <form action="" method="post" role="form" autocomplete="off">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">Nama Kegiatan</label>
                                <input type="text" class="form-control" id="namaKegiatanProker" name="namaKegiatanProker">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">Tujuan</label>
                                <input type="text" class="form-control" id="tujuanKegiatanProker" name="tujuanKegiatanProker">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">Tanggal</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="datepicker" name="tanggalKegiatanProker">
                                    <span class="input-group-addon bg-custom b-0 text-white"><i class="icon-calender"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">Lokasi</label>
                                <input type="text" class="form-control" id="lokasiKegiatanProker" name="lokasiKegiatanProker">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">Sasaran</label>
                                <input type="text" class="form-control" id="sasaranKegiatanProker" name="sasaranKegiatanProker">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">Tolak Ukur Kesuksesan</label>
                                <input type="text" class="form-control" id="tuKegiatanProker" name="tuKegiatanProker">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">Penanggung Jawab</label>
                                <input type="text" class="form-control" id="pjKegiatanProker" name="pjKegiatanProker">
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