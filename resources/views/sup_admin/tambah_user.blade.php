@extends('layouts.main_supadmin')
@section('content')
<span class="text-title">Tambah User</span>
<div class="container data-master">
    <div class="card-user shadow mb-4">
        <div class="card-header py-3">
            <div class="col-md-12">
                <h3 class="m-0 font-weight-bold" style="color: #8B0000;">Data User</h3>
                <button style="float: right; font-weight: 600; background: 	#3CB371; color: white;" class="btn btn-tambah btn-success float-right mb-1" type="button" data-toggle="modal" data-target="#ModalCreate">
                  Create User
                </button>
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
                        @forelse($users as $users)
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
<div class="modal fade" id="tambahUser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Recipient:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send message</button>
      </div>
    </div>
  </div>
</div>
@endsection
@section('modal')
@include('modal.tambah_user')
@endsection