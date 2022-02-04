@extends('layouts.main_admin')
@section('content')
    <div class="data relative flex items-top justify-center min-h-screen bg-gray-100 sm:items-center sm:pt-0">
            <div class="container-fluid" style="margin-top: 0 !important;">
                <div class="row">
                    <div class="jumbotron2 p-4 mb-3">
                        <div class="text-peserta container-fluid">
                            <img class="peserta" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAAAXNSR0IArs4c6QAAAbhJREFUaEPtWP8xRDEQ/q4TKkAHSqACVIBKUAEqQAc6QAV0wnwjmXnvJJfdbN7lMjYz99fLJvv92CR7Kww+VoPnDwfQW0FXwBUwMuAWMhJoDv+XCuwBuARwDOAwUPgO4BXAHYAvM62KBbQKnAO4L6x/AeBBkYNpqgaAJPmYzNZASAHQNp9Kqva3YScpgNvgew0G1sNVIuBbs0hi7ixnKYC3ScFK92dhH+0KgFrWUgTVrhW5qFKgdtOdAUA7HEi9E+Z9VNhOuQXEDU3LIlYnuSlAWsTDH6MkYeiLLKooASG9hZscDFILTW1IO/GC4mMuFjYLlo851or0MdcNQKsidABkUmOhs0kPEPuAdTV4X/D3DOCllVTWY/QEwA0Ael8zWAvXAYwmTjW3pAATT70oNZuwsAlkkbEJQM3tm0sy97Q2g8oBoG2ezKvPFzjN2El7Goleo+y+tJ4v4WVNsEtbH80BSG7bUrK57ykVmgPgPwo8MpcYj+FNNV27OYCa9lEKNtdmSuP/zFuiYyolUzq6S/Gz7w5ARdfv5MUVqMipX0hTNnrAcAA9WJ/u6Qq4AkYG3EJGAs3hwyvwA5caQjGwf/eeAAAAAElFTkSuQmCC"/>
                            <h1 class="text-admin display-8 fw-bold">Data Sekolah</h1>
                        </div>
                        </div>
                    <br><br>
                    <form action="/profil/import" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="file" name="file" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
                            <button class="btn btn-primary" type="submit" id="button-addon2">Import</button>
                        </div>
                    </form>
                    <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered yajra-datatable" width="100%">
                    <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example" tabindex="0">
                        <table class="table table-hover table-bordered yajra-datatable" width="100%" cellspacing="0">
                            <thead>
                                <tr class="text-center">
                                    <th>No</th>
                                    <th>Nama Sekolah</th>
                                    <th>NPSN</th>
                                    <th>Jenjang Pendidikan</th>
                                    <th>Status</th>
                                    <th>Alamat</th>
                                    <th>Ada Pemerintah</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $no = 0;
                                @endphp
                                @forelse ($profil as $p)
                                <tr>
                                    <th scope="row">{{ ++$no }}</th>
                                    <td>{{ $p->nama_sekolah }}</td>
                                    <td>{{ $pd->npsn }}</td>
                                    <td>{{ $pd->jenjang_pend }}</td>
                                    <td>{{ $pd->status }}</td>
                                    <td>{{ $pd->ada_pemerintah }}</td>
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
</div>
@endsection