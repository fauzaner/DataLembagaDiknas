@extends('layouts.main')
@section('content')
<div class="container">
    <div class="card-user shadow mb-4">
        <div class="card-header py-3">
            <div class="col-md-12">
                <h3 class="m-0 font-weight-bold" style="color: 	#8B0000;">Data User 
                <button style="float: right; font-weight: 600; background: 	#3CB371; color: white;" type="button" class="btn btn-success float-right mb-1" data-toggle="modal" data-target="#ModalTambahUser">Tambah User</button>
                </h6>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table style="color: #708090;" class="table table-bordered table-striped yajra-datatable" id="data_users_side" width="100%" cellspacing="0">
                    <thead>
                        <tr class="text-center">
                            <th>No</th>
                            <th>Name</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Admin</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $no = 0;
                        @endphp
                        @forelse ($users as $users)
                        <tr class="text-center">
                            <th scope="row">{{ ++$no }}</th>
                            <td>{{ $users->name }}</td>
                            <td>{{ $users->username }}</td>
                            <td>{{ $users->password }}</td>
                            <td>{{ $users->is_admin }}</td>
                            <td><button class="btn btn-danger" data-toggle="modal" data-target="#modalHapusUser">Delete</button></td>
                        </tr>
                        @empty
                        <td colspan="4" class="table-active text-center">Tidak Ada Data</td>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- Create Article Modal -->
<div class="modal" id="ModalTambahUser" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <!--FORM TAMBAH BARANG-->
            <form action="" method=" ">
                <div class="form-group">
                    <label for="">Nama Barang</label>
                    <input type="text" class="form-control" id="addNamaBarang" name="addNamaBarang" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="">Jumlah Barang</label>
                    <input type="text" class="form-control" id="addJumlahBarang" name="addJumlahBarang">
                </div>
                <button type="submit" class="btn btn-primary">Simpan Data</button>
            </form>
            <!--END FORM TAMBAH BARANG-->
            </div>
        </div>
    </div>
</div>
@endsection