@extends('layouts.main')
@section('content')
<div class="container">
    <div class="card-user shadow mb-4">
        <div class="card-header py-3">
            <div class="col-md-12">
                <h3 class="m-0 font-weight-bold" style="color: 	#8B0000;">Data User 
                <button style="float: right; font-weight: 600; background: 	#3CB371; color: white;" class="btn " type="button" data-toggle="modal" data-target="#CreateArticleModal">
                    Tambah User
                </button>
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
                            <th>is_admin</th>
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
                            <td><button type="button" class="btn btn-danger">Hapus</button></td>
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
<div class="modal" id="CreateArticleModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Tambah User</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <div class="alert alert-danger alert-dismissible fade show" role="alert" style="display: none;">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="alert alert-success alert-dismissible fade show" role="alert" style="display: none;">
                    <strong>Success!</strong>Successfully.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="form-group">
                    <label for="title">Nama :</label>
                    <input type="text" class="form-control" name="nama" id="nama">
                </div>
                <div class="form-group">
                    <label for="title">Username :</label>
                    <input type="text" class="form-control" name="username" id="username">
                </div>
                <div class="form-group">
                    <label for="title">Password :</label>
                    <input type="password" class="form-control" name="password" id="password">
                </div>
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-success" id="SubmitCreateArticleForm">Create</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endsection