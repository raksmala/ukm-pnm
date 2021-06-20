@extends('layouts.admin.app')
@section('content')
<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <h4 class="page-title">Detail Jadwal</h4>
        <p class="text-muted page-title-alt">{{ $jadwal->namaKegiatan }}</p>
    </div>
</div>

<div class="col-lg-12">
    <div class="card-box table-responsive">

        <table id="datatable" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIM</th>
                    <th>Nama Undangan</th>
                    <th>Program Studi</th>
                    <th>Waktu Kedatangan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($detailJadwal as $data)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->NIM }}</td>
                    <td>{{ $data->namaUndangan }}</td>
                    <td>{{ $data->prodi }}</td>
                    <td>{{ $data->updated_at }}</td>
                </tr>        
                @endforeach       
            </tbody>
        </table>
    </div>
</div>
@endsection
