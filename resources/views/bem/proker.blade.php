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
                @foreach ($proker as $data)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->ukm->namaUKM }}</td>
                    <td>{{ $data->namaKegiatanProker }}</td>
                    <td>{{ $data->tujuanKegiatanProker }}</td>
                    <td>{{ $data->tanggalKegiatanProker }}</td>
                    <td>{{ $data->lokasiKegiatanProker }}</td>
                    <td>{{ $data->sasaranKegiatanProker }}</td>
                    <td>{{ $data->tuKegiatanProker }}</td>
                    <td>{{ $data->pjKegiatanProker }}</td>
                </tr>     
                @endforeach                     
            </tbody>
        </table>
    </div>
</div>
@endsection