@extends('layouts.admin.app')
@section('content')
<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <h4 class="page-title">Anggota</h4>
        <p class="text-muted page-title-alt">Anggota Tetap UKM {{ Auth()->user()->name }}</p>
    </div>
</div>

<div class="col-lg-12">
    <div class="card-box table-responsive">
        <div style="width: 100%; text-align: right; margin-bottom: 10px;">
            <a href="#" class="on-default edit-row btn btn-success" data-toggle="modal" data-target="#tambah-modal"><i class="fa fa-plus"></i></a>
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
                @foreach ($anggota as $data)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->namaAnggota }}</td>
                    <td>{{ $data->NIMAnggota }}</td>
                    <td>{{ ConvertJabatan::convertJabatan($data->jabatanAnggota) }}</td>
                    <td>{{ $data->programStudiAnggota }}</td>
                    <td><a href='#' class='on-default edit-row btn btn-primary' data-toggle="modal" data-target="#edit-modal" onclick="setEditForm('{{ $data->idAnggota }}', '{{ $data->NIMAnggota }}', '{{ $data->namaAnggota }}', '{{ ConvertJabatan::convertJabatan($data->jabatanAnggota) }}', '{{ $data->programStudiAnggota }}')"><i class='fa fa-pencil'></i></a>
                        <a href='#' class='on-default delete-row btn btn-danger delete-anggota' idAnggota="{{ $data->idAnggota }}" namaAnggota="{{ $data->namaAnggota }}"><i class='fa fa-trash'></i></a>
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
                <h4 class="modal-title">Data Anggota</h4>
            </div>
            <form action="/admin/anggota/tambah" method="post" role="form" autocomplete="off">
            {{ csrf_field() }}
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="control-label">NIM</label>
                                <input type="text" class="form-control" id="NIMAnggota" name="NIMAnggota">
                                @if ($errors->has('NIMAnggota'))
                                    <strong style="color:white;">{{ $errors->first('NIMAnggota') }}</strong>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="form-group">
                                <label class="control-label">Nama</label>
                                <input type="text" class="form-control" id="namaAnggota" name="namaAnggota">
                                @if ($errors->has('namaAnggota'))
                                    <strong style="color:white;">{{ $errors->first('namaAnggota') }}</strong>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="ukm">Jabatan</label>
                                <select class="form-control" id="jabatanAnggota" name="jabatanAnggota">
                                    <option>Ketua</option>
                                    <option>Wakil Ketua</option>
                                    <option>Sekretaris</option>
                                    <option>Wakil Sekretaris</option>
                                    <option>Bendahara</option>
                                    <option>Wakil Bendahara</option>
                                    <option>Koordinator</option>
                                    <option>Anggota</option>
                                </select>
                                @if ($errors->has('jabatanAnggota'))
                                    <strong style="color:white;">{{ $errors->first('jabatanAnggota') }}</strong>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="prodi">Program Studi</label>
                                <input type="text" id="programStudiAnggota" name="programStudiAnggota" class="form-control">
                                @if ($errors->has('programStudiAnggota'))
                                    <strong style="color:white;">{{ $errors->first('programStudiAnggota') }}</strong>
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
                <h4 class="modal-title">Data Anggota</h4>
            </div>
            <form action="/admin/anggota/update" method="post" role="form" autocomplete="off">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <input type="hidden" id="editIdAnggota" name="editIdAnggota">
                                <label class="control-label">NIM</label>
                                <input type="text" class="form-control" id="editNIMAnggota" name="editNIMAnggota">
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="form-group">
                                <label class="control-label">Nama</label>
                                <input type="text" class="form-control" id="editNamaAnggota" name="editNamaAnggota">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="ukm">Jabatan</label>
                                <select class="form-control" id="editJabatanAnggota" name="editJabatanAnggota">
                                    <option value="Ketua">Ketua</option>
                                    <option value="Wakil Ketua">Wakil Ketua</option>
                                    <option value="Sekretaris">Sekretaris</option>
                                    <option value="Wakil Sekretaris">Wakil Sekretaris</option>
                                    <option value="Bendahara">Bendahara</option>
                                    <option value="Wakil Bendahara">Wakil Bendahara</option>
                                    <option value="Koordinator">Koordinator</option>
                                    <option value="Anggota">Anggota</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="prodi">Program Studi</label>
                                <input type="text" id="editProgramStudiAnggota" name="editProgramStudiAnggota" class="form-control">
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
    @if ($errors->has('NIMAnggota') || $errors->has('namaAnggota') || $errors->has('jabatanAnggota') || $errors->has('programStudiAnggota'))
        console.log($errors->has('NIMAnggota'));
        console.log($errors->has('namaAnggota'));
        console.log($errors->has('jabatanAnggota'));
        console.log($errors->has('programStudiAnggota'));
        $('#tambah-modal').modal('show');
    @endif
    @if ($errors->has('editNIMAnggota') || $errors->has('editNamaAnggota') || $errors->has('editJabatanAnggota') || $errors->has('editProgramStudiAnggota'))
        $('#edit-modal').modal('show');
    @endif
    function setEditForm(idAnggota, NIMAnggota, namaAnggota, jabatanAnggota, programStudiAnggota) {
        document.getElementById('editIdAnggota').value = idAnggota;
        document.getElementById('editNIMAnggota').value = NIMAnggota;
        document.getElementById('editNamaAnggota').value = namaAnggota;
        document.getElementById('editJabatanAnggota').value = jabatanAnggota;
        document.getElementById('editProgramStudiAnggota').value = programStudiAnggota;
    }

    $('.delete-anggota').click(function(){
        var idAnggota = $(this).attr('idAnggota');
        var namaAnggota = $(this).attr('namaAnggota');
        swal({
            title: "Yakin ?",
            text: "Menghapus Data Anggota " +namaAnggota+ " ?",
            icon: "error",
            buttons: ["Batal", "Hapus"],
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                window.location = "/admin/anggota/hapus/" + idAnggota;
            }
        });
        event.preventDefault();
    });
</script>
@endsection
