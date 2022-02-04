@extends('layouts.main_supadmin')
@section('content')
<span class="text-title">User</span>
<div class="container data-master">
    <div class="card-user shadow mb-4">
        <div class="card-header py-3">
            <div class="col-md-12">
                <h3 class="m-0 font-weight-bold" style="color: #8B0000;">Data User</h3>
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
                            <td>
                              <button class="btn btn-success" type="button" data-toggle="modal" data-target="#ModalEdit">Edit</button>
                              <form method="POST" action="{{ url('user/delete', $users->username ) }}">
                                @csrf
                                @method('DELETE') 
                              <button class="btn btn-danger" onclick="return confirm('Apakah yakin menghapus user ini?')">Delete</button>
                              </form>
                            </td>
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

@endsection
@section('modal')

@if ($message = Session::get('success'))
   <p>{{ $message }}</p>
@endif

<form method="POST" action="{{ url('user/update', $users->username ) }}" enctype="multipart/form-data">
    @csrf
    <div class="modal pop-up fade text-left" id="ModalEdit" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Data User</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="input-group mb-3" id="ModalEdit">
                    <input name="name" value="{{ $users->name }}" type="text" placeholder="Name..."> 
                    <input name="username" value="{{ $users->username }}" type="text" placeholder="Username...">
                    <input name="password" value="{{ $users->password }}" type="text" placeholder="Password...">
                    <input name="admin" value="{{ $users->is_admin }}" type="text" placeholder="Admin...">
                    <button class="btn btn-primary" type="submit" id="button-addon2">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>  
</form>
@endsection