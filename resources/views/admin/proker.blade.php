@extends('layouts.admin.app')
@section('content')
<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <h4 class="page-title">Program Kerja</h4>
        <p class="text-muted page-title-alt">Program Kerja UKM {{ Auth()->user()->name }}</p>
    </div>
</div>

<div class="col-lg-12">
    <div class="card-box table-responsive">
        <div style="width: 100%; text-align: right; margin-bottom: 10px;">
            <a href="#" class="on-default edit-row btn btn-success" data-toggle="modal" data-target="#tambah-modal"><i class="fa fa-plus"></i></a>
        </div>

        <table id="datatable-buttons" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Kegiatan</th>
                    <th>Tujuan</th>
                    <th>Tanggal Kegiatan</th>
                    <th>Lokasi Kegiatan</th>
                    <th>Sasaran</th>
                    <th>Tolak Ukur Kesuksesan</th>
                    <th>Penanggung Jawab</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($proker as $data)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->namaKegiatanProker }}</td>
                    <td>{{ $data->tujuanKegiatanProker }}</td>
                    <td>{{ $data->tanggalKegiatanProker }}</td>
                    <td>{{ $data->lokasiKegiatanProker }}</td>
                    <td>{{ $data->sasaranKegiatanProker }}</td>
                    <td>{{ $data->tuKegiatanProker }}</td>
                    <td>{{ $data->pjKegiatanProker }}</td>
                    <td><a href='#' id="edit" class='on-default edit-row btn btn-primary' data-toggle="modal" data-target="#edit-modal" onclick="setEditForm('{{ $data->idProgramKerja }}', '{{ $data->namaKegiatanProker }}', '{{ $data->tujuanKegiatanProker }}', '{{ $data->tanggalKegiatanProker }}', '{{ $data->lokasiKegiatanProker }}', '{{ $data->sasaranKegiatanProker }}', '{{ $data->tuKegiatanProker }}', '{{ $data->pjKegiatanProker }}', '{{ $data->keteranganKegiatanProker }}')"><i class='fa fa-pencil'></i></a>
                        <a href='#' class='on-default delete-row btn btn-danger delete-proker' idProgramKerja="{{ $data->idProgramKerja }}" namaKegiatanProker="{{ $data->namaKegiatanProker }}"><i class='fa fa-trash'></i></a>
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
                <h4 class="modal-title">Data Program Kerja</h4>
            </div>
            <form action="/admin/proker/tambah" method="post" role="form" autocomplete="off">
            {{ csrf_field() }}
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">Nama Kegiatan</label>
                                <input type="text" class="form-control" id="namaKegiatanProker" name="namaKegiatanProker">
                                @if ($errors->has('namaKegiatanProker'))
                                    <strong style="color:white;">{{ $errors->first('namaKegiatanProker') }}</strong>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">Tujuan</label>
                                <input type="text" class="form-control" id="tujuanKegiatanProker" name="tujuanKegiatanProker">
                                @if ($errors->has('tujuanKegiatanProker'))
                                    <strong style="color:white;">{{ $errors->first('tujuanKegiatanProker') }}</strong>
                                @endif
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
                                @if ($errors->has('tanggalKegiatanProker'))
                                    <strong style="color:white;">{{ $errors->first('tanggalKegiatanProker') }}</strong>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">Lokasi</label>
                                <input type="text" class="form-control" id="lokasiKegiatanProker" name="lokasiKegiatanProker">
                                @if ($errors->has('lokasiKegiatanProker'))
                                    <strong style="color:white;">{{ $errors->first('lokasiKegiatanProker') }}</strong>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">Sasaran</label>
                                <input type="text" class="form-control" id="sasaranKegiatanProker" name="sasaranKegiatanProker">
                                @if ($errors->has('sasaranKegiatanProker'))
                                    <strong style="color:white;">{{ $errors->first('sasaranKegiatanProker') }}</strong>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">Tolak Ukur Kesuksesan</label>
                                <input type="text" class="form-control" id="tuKegiatanProker" name="tuKegiatanProker">
                                @if ($errors->has('tuKegiatanProker'))
                                    <strong style="color:white;">{{ $errors->first('tuKegiatanProker') }}</strong>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">Penanggung Jawab</label>
                                <input type="text" class="form-control" id="pjKegiatanProker" name="pjKegiatanProker">
                                @if ($errors->has('pjKegiatanProker'))
                                    <strong style="color:white;">{{ $errors->first('pjKegiatanProker') }}</strong>
                                @endif
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
                <h4 class="modal-title">Data Program Kerja</h4>
            </div>
            <form action="/admin/proker/update" method="post" role="form" autocomplete="off">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="hidden" id="editIdProgramKerja" name="editIdProgramKerja">
                                <label class="control-label">Nama Kegiatan</label>
                                <input type="text" class="form-control" id="editNamaKegiatanProker" name="editNamaKegiatanProker">
                                @if ($errors->has('editNamaKegiatanProker'))
                                    <strong style="color:white;">{{ $errors->first('editNamaKegiatanProker') }}</strong>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">Tujuan</label>
                                <input type="text" class="form-control" id="editTujuanKegiatanProker" name="editTujuanKegiatanProker">
                                @if ($errors->has('editTujuanKegiatanProker'))
                                    <strong style="color:white;">{{ $errors->first('editTujuanKegiatanProker') }}</strong>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">Tanggal</label>
                                <div class="input-group">
                                    <input type="text" class="form-control datepick" id="editTanggalKegiatanProker" id="editTanggalKegiatanProker" name="editTanggalKegiatanProker">
                                    <span class="input-group-addon bg-custom b-0 text-white"><i class="icon-calender"></i></span>
                                </div>
                                @if ($errors->has('editTanggalKegiatanProker'))
                                    <strong style="color:white;">{{ $errors->first('editTanggalKegiatanProker') }}</strong>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">Lokasi</label>
                                <input type="text" class="form-control" id="editLokasiKegiatanProker" name="editLokasiKegiatanProker">
                                @if ($errors->has('editLokasiKegiatanProker'))
                                    <strong style="color:white;">{{ $errors->first('editLokasiKegiatanProker') }}</strong>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">Sasaran</label>
                                <input type="text" class="form-control" id="editSasaranKegiatanProker" name="editSasaranKegiatanProker">
                                @if ($errors->has('editSasaranKegiatanProker'))
                                    <strong style="color:white;">{{ $errors->first('editSasaranKegiatanProker') }}</strong>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">Tolak Ukur Kesuksesan</label>
                                <input type="text" class="form-control" id="editTuKegiatanProker" name="editTuKegiatanProker">
                                @if ($errors->has('editTuKegiatanProker'))
                                    <strong style="color:white;">{{ $errors->first('editTuKegiatanProker') }}</strong>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">Penanggung Jawab</label>
                                <input type="text" class="form-control" id="editPjKegiatanProker" name="editPjKegiatanProker">
                                @if ($errors->has('editPjKegiatanProker'))
                                    <strong style="color:white;">{{ $errors->first('editPjKegiatanProker') }}</strong>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="col-md-3 control-label">Keterangan</label>
                                <select class="form-control" id="editKeteranganKegiatanProker" name="editKeteranganKegiatanProker">
                                    <option value="belumTerlaksana">Belum Terlaksana</option>
                                    <option value="terlaksana">Terlaksana</option>
                                    <option value="tidakTerlaksana">Tidak Terlaksana</option>
                                </select>
                                @if ($errors->has('editKeteranganKegiatanProker'))
                                    <strong style="color:white;">{{ $errors->first('editKeteranganKegiatanProker') }}</strong>
                                @endif
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
    @if(Session::has('success'))
        $(document).ready(function(){
            $.Notification.autoHideNotify('success', 'bottom right', "{!! Session::get('success') !!}");
        });
    @endif
    @if ($errors->has('namaKegiatanProker') || $errors->has('tujuanKegiatanProker') || $errors->has('tanggalKegiatanProker') || $errors->has('lokasiKegiatanProker') || $errors->has('sasaranKegiatanProker') || $errors->has('tuKegiatanProker') || $errors->has('pjKegiatanProker'))
        $('#tambah-modal').modal('show');
    @endif
    @if ($errors->has('editNamaKegiatanProker') || $errors->has('editTujuanKegiatanProker') || $errors->has('editTanggalKegiatanProker') || $errors->has('editLokasiKegiatanProker') || $errors->has('editSasaranKegiatanProker') || $errors->has('editTuKegiatanProker') || $errors->has('editPjKegiatanProker'))
        $('#edit').click();
    @endif
    function setEditForm(idProgramKerja, namaKegiatanProker, tujuanKegiatanProker, tanggalKegiatanProker, lokasiKegiatanProker, sasaranKegiatanProker, tuKegiatanProker, pjKegiatanProker, keteranganKegiatanProker) {
        document.getElementById('editIdProgramKerja').value = idProgramKerja;
        document.getElementById('editNamaKegiatanProker').value = namaKegiatanProker;
        document.getElementById('editTujuanKegiatanProker').value = tujuanKegiatanProker;
        var tanggalKegiatanProker = tanggalKegiatanProker.split("-");
        document.getElementById('editTanggalKegiatanProker').value = tanggalKegiatanProker[1]+ "/" +tanggalKegiatanProker[2]+ "/" +tanggalKegiatanProker[0];
        document.getElementById('editLokasiKegiatanProker').value = lokasiKegiatanProker;
        document.getElementById('editSasaranKegiatanProker').value = sasaranKegiatanProker;
        document.getElementById('editTuKegiatanProker').value = tuKegiatanProker;
        document.getElementById('editPjKegiatanProker').value = pjKegiatanProker;
        document.getElementById('editKeteranganKegiatanProker').value = keteranganKegiatanProker;
    }

    $('.datepick').each(function() {
        $(this).datepicker();
    });
    
    $('.delete-proker').click(function(){
        var idProgramKerja = $(this).attr('idProgramKerja');
        var namaKegiatanProker = $(this).attr('namaKegiatanProker');
        swal({
            title: "Yakin ?",
            text: "Menghapus Data Program Kerja " +namaKegiatanProker+ " ?",
            icon: "error",
            buttons: ["Batal", "Hapus"],
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                window.location = "/admin/proker/hapus/" + idProgramKerja;
            }
        });
        event.preventDefault();
    });
</script>
@endsection