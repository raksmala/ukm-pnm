@extends('layouts.admin.app')
@section('content')
<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <h4 class="page-title">Anggota</h4>
        <p class="text-muted page-title-alt">Anggota Tetap UKM Badminton</p>
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
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Jabatan</th>
                    <th>Program Studi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Rendy Kharisma Aksmala</td>
                    <td>183307050</td>
                    <td>1</td>
                    <td>Teknologi Informasi 4A</td>
                    <td><a href='#' class='on-default edit-row btn btn-primary'><i class='fa fa-pencil'></i></a>
                        <a href='#' class='on-default delete-row btn btn-danger'><i class='fa fa-trash'></i></a>
                    </td>
                </tr>               
            </tbody>
        </table>
    </div>
</div>
@endsection