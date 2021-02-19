@extends('layouts.admin.app')
@section('content')
<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <h4 class="page-title">Jadwal</h4>
        <p class="text-muted page-title-alt">Jadwal UKM Badminton</p>
    </div>
</div>

<div class="col-lg-12">
    <div class="card-box table-responsive">
        <div style="width: 100%; text-align: right; margin-bottom: 10px;">
            <a href="#" class="on-default edit-row btn btn-success"><i class="fa fa-plus"></i></a>
        </div>

        <table id="datatable" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Kegiatan</th>
                    <th>Tanggal</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Musyawarah Besar</td>
                    <td>2020-03-28 s/d 2020-03-28</td>
                    <td><a href='#' class='on-default edit-row btn btn-primary' data-toggle='modal' data-target='#add-modal' onclick="SetInput('1', 'Musyawarah Besar', '2020-03-28', '2020-03-28')"><i class='fa fa-pencil'></i></a>
                        <a href='#' class='on-default delete-row btn btn-danger' data-toggle='modal' data-target='#hapus-modal' onclick="SetInputs('1', 'Musyawarah Besar', '2020-03-28', '2020-03-28')"><i class='fa fa-trash'></i></a>
                    </td>
                </tr>              
            </tbody>
        </table>
    </div>
</div>
@endsection