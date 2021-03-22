@extends('layouts.admin.app')
@section('content')
<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <h4 class="page-title">Kritik & Saran</h4>
        <p class="text-muted page-title-alt">Kritik & Saran</p>
    </div>
</div>

<div class="col-lg-12">
    <div class="card-box table-responsive">

        <table id="datatable-buttons" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama UKM</th>
                    <th>Nama Mahasiswa</th>
                    <th>Kritik & Saran</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kritikSaran as $data)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->ukm->namaUKM }}</td>
                    <td>{{ $data->namaMahasiswa }}</td>
                    <td>{{ $data->isiKritikSaran }}</td>
                </tr>  
                @endforeach                  
            </tbody>
        </table>
    </div>
</div>
@endsection