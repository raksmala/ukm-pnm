@extends('layouts.admin.app')
@section('content')
<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <h4 class="page-title">Laporan</h4>
        <p class="text-muted page-title-alt">Laporan UKM {{ Auth()->user()->name }}</p>
    </div>
</div>

<div class="col-lg-12">
    <div class="card-box table-responsive">

        <table id="datatable" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Kegiatan</th>
                    <th>Tanggal Kegiatan</th>
                    <th>Lokasi Kegiatan</th>
                    <th>Penanggung Jawab</th>
                    <th>Foto Kegiatan</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($proker as $data)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->namaKegiatanProker }}</td>
                    <td>{{ $data->tanggalKegiatanProker }}</td>
                    <td>{{ $data->lokasiKegiatanProker }}</td>
                    <td>{{ $data->pjKegiatanProker }}</td>
                    @if($data->fotoKegiatanProker != null)
                    <td><a href="#" data-toggle="modal" data-target="#show-detail-modal-{{ $data->idProgramKerja }}">Detail</a></td>
                    @else
                    <td></td>
                    @endif
                    @if($data->keteranganKegiatanProker == 'terlaksana')
                    <td>Terlaksana</td>
                    @else if($data->keteranganKegiatanProker == 'tidakTerlaksana')
                    <td>Tidak Terlaksana</td>
                    @endif
                    <td>
                        <form action="/admin/laporan/update/{{ $data->idProgramKerja }}" method="post" role="form" autocomplete="off" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                            <input type="file" class="filestyle" id="fotoKegiatanProker{{ $data->idProgramKerja }}" name="fotoKegiatanProker{{ $data->idProgramKerja }}" data-input="false" data-buttontext="Unggah Foto" data-buttonname="btn-default" onchange="document.getElementById('uploadFoto{{ $data->idProgramKerja }}').click();">
                            <button type="submit" style="display: none;" id="uploadFoto{{ $data->idProgramKerja }}" onclick="var idTemp = $data->idProgramKerja;"></button>
                        </form>
                        <a href='#' class='on-default delete-row btn btn-danger delete-proker' idProgramKerja="{{ $data->idProgramKerja }}" namaKegiatanProker="{{ $data->namaKegiatanProker }}"><i class='fa fa-trash'></i></a>
                    </td>
                </tr>   
                @endforeach                       
            </tbody>
        </table>
    </div>
</div>

@foreach ($proker as $data)
<div id="show-detail-modal-{{ $data->idProgramKerja }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Detail Foto Kegiatan</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <img src="{{ secure_url('') }}/upload/{{ $data->fotoKegiatanProker }}" alt="Image" style="max-height: 500px; max-width: 500px; display: block; margin-left: auto; margin-right: auto;">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="/upload/{{ $data->fotoKegiatanProker }}" target="_blank" class="btn btn-info waves-effect waves-light">Unduh Foto</a>
            </div>
        </div>
    </div>
</div><!-- /.modal -->
@endforeach
@endsection
@section('scripts')
<script type="text/javascript">
    @if ($errors->has("fotoKegiatanProker"+idTemp+""))
        $.Notification.autoHideNotify('error', 'bottom right', '{{ $errors->first("fotoKegiatanProker"+idTemp+"") }}');
    @endif
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