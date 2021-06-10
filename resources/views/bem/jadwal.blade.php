@extends('layouts.admin.app')
@section('content')
<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <h4 class="page-title">Jadwal</h4>
        <p class="text-muted page-title-alt">Jadwal UKM</p>
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
                    <th>Tanggal</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($jadwal as $data)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->ukm->namaUKM }}</td>
                    <td>{{ $data->namaKegiatan }}</td>
                    <td>{{ $data->tanggalAwal }} s/d {{ $data->tanggalAkhir }}</td>
                    <td>
                        <a href="{{ secure_url('/bem/jadwal/detail/'.$data->idJadwal) }}" class='on-default edit-row btn btn-primary' target="_blank"><i class='fa fa-info'></i></a>
                    </td>
                </tr>  
                @endforeach                  
            </tbody>
        </table>
    </div>
</div>
@endsection