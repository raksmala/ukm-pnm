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
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Taekwondo</td>
                    <td>Musyawarah Besar</td>
                    <td>2020-02-11 s/d 2020-02-11</td>
                </tr>          
            </tbody>
        </table>
    </div>
</div>
@endsection