@extends('layouts.admin.app')
@section('content')
<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <h4 class="page-title">Anggota</h4>
        <p class="text-muted page-title-alt">Anggota Baru UKM {{ Auth()->user()->name }}</p>
    </div>
</div>
<div class="col-lg-12">
    <div class="card-box table-responsive">

        <table id="datatable" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>NIM</th>
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
                    <td>{{ $data->programStudiAnggota }}</td>
                    <td><a href='#' id="edit" class='on-default edit-row btn btn-primary' data-toggle="modal" data-target="#edit-modal" onclick="setEditForm('{{ $data->idAnggota }}', '{{ $data->NIMAnggota }}', '{{ $data->namaAnggota }}', '{{ $data->programStudiAnggota }}', '{{ $data->statusAnggota }}')"><i class='fa fa-pencil'></i></a>
                        <a href='#' class='on-default delete-row btn btn-danger delete-anggota' idAnggota="{{ $data->idAnggota }}" namaAnggota="{{ $data->namaAnggota }}"><i class='fa fa-trash'></i></a>
                    </td>
                </tr>     
                @endforeach                
            </tbody>
        </table>
    </div>
</div>

<div id="edit-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Data Anggota</h4>
            </div>
            <form action="/admin/anggota/baru/update" method="post" role="form" autocomplete="off">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="hidden" id="editIdAnggota" name="editIdAnggota">
                                <label class="control-label">NIM</label>
                                <input type="text" class="form-control" id="editNIMAnggota" name="editNIMAnggota">
                                @if ($errors->has('editNIMAnggota'))
                                    <strong style="color:white;">{{ $errors->first('editNIMAnggota') }}</strong>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <label class="control-label">Nama</label>
                                <input type="text" class="form-control" id="editNamaAnggota" name="editNamaAnggota">
                                @if ($errors->has('editNamaAnggota'))
                                    <strong style="color:white;">{{ $errors->first('editNamaAnggota') }}</strong>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="prodi">Program Studi</label>
                                <input type="text" id="editProgramStudiAnggota" name="editProgramStudiAnggota" class="form-control">
                                @if ($errors->has('editProgramStudiAnggota'))
                                    <strong style="color:white;">{{ $errors->first('editProgramStudiAnggota') }}</strong>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="ukm">Status</label>
                                <select class="form-control" id="editStatusAnggota" name="editStatusAnggota">
                                    <option value="baru">Baru</option>
                                    <option value="tetap">Tetap</option>
                                </select>
                                @if ($errors->has('editStatusAnggota'))
                                    <strong style="color:white;">{{ $errors->first('editStatusAnggota') }}</strong>
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
@endsection
@section('scripts')
<script type="text/javascript">
    @if(Session::has('success'))
        $(document).ready(function(){
            $.Notification.autoHideNotify('success', 'bottom right', "{!! Session::get('success') !!}");
        });
    @endif
    @if ($errors->has('editNIMAnggota') || $errors->has('editNamaAnggota') || $errors->has('editJabatanAnggota') || $errors->has('editProgramStudiAnggota'))
        $('#edit').click();
    @endif
    function setEditForm(idAnggota, NIMAnggota, namaAnggota, programStudiAnggota, statusAnggota) {
        document.getElementById('editIdAnggota').value = idAnggota;
        document.getElementById('editNIMAnggota').value = NIMAnggota;
        document.getElementById('editNamaAnggota').value = namaAnggota;
        document.getElementById('editProgramStudiAnggota').value = programStudiAnggota;
        document.getElementById('editStatusAnggota').value = statusAnggota;
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