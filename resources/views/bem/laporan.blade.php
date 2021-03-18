@extends('layouts.admin.app')
@section('content')
<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <h4 class="page-title">Laporan</h4>
        <p class="text-muted page-title-alt">Laporan UKM</p>
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
                    <th>Tanggal Kegiatan</th>
                    <th>Lokasi Kegiatan</th>
                    <th>Penanggung Jawab</th>
                    <th>Foto Kegiatan</th>
                    <th>Keterangan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($proker as $data)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->ukm->namaUKM }}</td>
                    <td>{{ $data->namaKegiatanProker }}</td>
                    <td>{{ $data->tanggalKegiatanProker }}</td>
                    <td>{{ $data->lokasiKegiatanProker }}</td>
                    <td>{{ $data->pjKegiatanProker }}</td>
                    @if($data->fotoKegiatanProker != null)
                    <td><a href="#" data-toggle="modal" data-target="#show-detail-modal-{{ $data->idProgramKerja }}">Detail</a></td>
                    @else
                    <td></td>
                    @endif
                    <td>@if($data->keteranganKegiatanProker == 'tidakTerlaksana') Tidak Terlaksana @elseif($data->keteranganKegiatanProker == 'terlaksana') Terlaksana @endif</td>
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
                            <img src="{{ url('') }}/upload/{{ $data->UKM_idUKM }}/{{ $data->fotoKegiatanProker }}" alt="Image" style="max-height: 500px; max-width: 500px; display: block; margin-left: auto; margin-right: auto;">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="/upload/{{ $data->UKM_idUKM }}/{{ $data->fotoKegiatanProker }}" class="btn btn-info waves-effect waves-light">Unduh Foto</a>
            </div>
        </div>
    </div>
</div><!-- /.modal -->
@endforeach
@endsection