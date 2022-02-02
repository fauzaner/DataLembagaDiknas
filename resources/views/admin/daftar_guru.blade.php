@extends('layouts.main_admin')
@section('content')
<span class="text">Pesdik</span>
<div class="data-master">
    <div class="container overflow-x-scroll">
        <div class="card-user shadow mb-4">
            <div class="card-header py-3">
                <div class="col-md-12">
                    <h1 class="m-0 font-weight-bold" style="color: 	#8B0000;">Data Guru</h1>
                    <button style="float: right; font-weight: 600; background: 	#3CB371; color: white;" class="btn btn-success float-right mb-1" type="button" data-toggle="modal" data-target="#ModalCreate">
                        Import
                    </button>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive nowrap">
                    <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example" tabindex="0">
                        <table class="table table-striped table-hover table-bordered" width="100%" cellspacing="0">
                            <thead>
                                <tr class="text-center">
                                    <th style="min-width:20px">No</th>
                                    <th style="min-width:250px">Nama</th>
                                    <th style="min-width:150px">NUPTK</th>
                                    <th style="min-width:100px">JK</th>
                                    <th style="min-width:200px">Tempat Lahir</th>
                                    <th style="min-width:200px">Tanggal Lahir</th>
                                    <th style="min-width:150px">NIP</th>
                                    <th style="min-width:200px">Status Kepegawaian</th>
                                    <th style="min-width:150px">Jenis PTK</th>
                                    <th style="min-width:150px">Agama</th>
                                    <th style="min-width:200px">Alamat Jalan</th>
                                    <th>RT</th>
                                    <th>RW</th>
                                    <th style="min-width:150px">Nama Dusun</th>
                                    <th style="min-width:150px">Desa/Kelurahan</th>
                                    <th style="min-width:150px">Kecamatan</th>
                                    <th style="min-width:100px">Kode Pos</th>
                                    <th style="min-width:100px">Telepon</th>
                                    <th style="min-width:100px">HP</th>
                                    <th style="min-width:150px">E-Mail</th>
                                    <th style="min-width:200px">Tugas Tambahan</th>
                                    <th style="min-width:200px">SK CPNS</th>
                                    <th style="min-width:200px">SK Pengangkatan</th>
                                    <th style="min-width:150px">TMT Pengangkatan</th>
                                    <th style="min-width:200px">Lembaga Pengangkatan</th>
                                    <th style="min-width:150px">Pangkat Golongan</th>
                                    <th style="min-width:150px">Sumber Gaji</th>
                                    <th style="min-width:200px">Nama Ibu</th>
                                    <th style="min-width:150px">Status Perkawinan</th>
                                    <th style="min-width:200px">Nama Suami/Istri</th>
                                    <th style="min-width:150px">NIP Suami/Istri</th>
                                    <th style="min-width:200px">Pekerjaan Suami/Istri</th>
                                    <th style="min-width:100px">TMT PNS</th>
                                    <th style="min-width:250px">Sudah Lisensi Kepala Sekolah</th>
                                    <th style="min-width:200px">Pernah Diklat Kepegawaian</th>
                                    <th style="min-width:150px">Keahlian Braille</th>
                                    <th style="min-width:200px">Keahlian Bahasa Isyarat</th>
                                    <th style="min-width:150px">NPWP</th>
                                    <th style="min-width:200px">Nama Wajib Pajak</th>
                                    <th style="min-width:150px">Kewarganegaraan</th>
                                    <th style="min-width:100px">Bank</th>
                                    <th style="min-width:200px">Nomor Rekening Bank</th>
                                    <th style="min-width:200px">Rekening Nama</th>
                                    <th style="min-width:150px">NIK</th>
                                    <th style="min-width:150px">No. KK</th>
                                    <th style="min-width:150px">Karpeg</th>
                                    <th style="min-width:100px">Karis/Kartu</th>
                                    <th style="min-width:100px">Lintang</th>
                                    <th style="min-width:100px">Bujur</th>
                                    <th style="min-width:100px">NUKS</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $no = 0;
                                @endphp
                                @forelse ($guru as $gr)
                                <tr>
                                    <th scope="row">{{ ++$no }}</th>
                                    <td>{{ $gr->nama_gr }}</td>
                                    <td>{{ $gr->nuptk }}</td>
                                    <td>{{ $gr->jk }}</td>
                                    <td>{{ $gr->tmp_lhr }}</td>
                                    <td>{{ $gr->tgl_lhr }}</td>
                                    <td>{{ $gr->nip }}</td>
                                    <td>{{ $gr->status_kep }}</td>
                                    <td>{{ $gr->jenis_ptk }}</td>
                                    <td>{{ $gr->agama }}</td>
                                    <td>{{ $gr->almt_jln }}</td>
                                    <td>{{ $gr->rt }}</td>
                                    <td>{{ $gr->rw }}</td>
                                    <td>{{ $gr->nm_dusun }}</td>
                                    <td>{{ $gr->desa_kelurahan }}</td>
                                    <td>{{ $gr->kecamatan }}</td>
                                    <td>{{ $gr->kd_pos }}</td>
                                    <td>{{ $gr->telp }}</td>
                                    <td>{{ $gr->hp }}</td>
                                    <td>{{ $gr->email }}</td>
                                    <td>{{ $gr->tgs_tambahan }}</td>
                                    <td>{{ $gr->sk_cpns }}</td>
                                    <td>{{ $gr->sk_pengangkatan }}</td>
                                    <td>{{ $gr->tmt_pengangkatan }}</td>
                                    <td>{{ $gr->lmb_pengangkatan }}</td>
                                    <td>{{ $gr->pangkat_gol }}</td>
                                    <td>{{ $gr->sumber_gaji }}</td>
                                    <td>{{ $gr->nm_ibu }}</td>
                                    <td>{{ $gr->nama_ibu }}</td>
                                    <td>{{ $gr->status_perkawinan }}</td>
                                    <td>{{ $gr->nm_suami_istri }}</td>
                                    <td>{{ $gr->nip_suami_istri }}</td>
                                    <td>{{ $gr->pekerjaan_suami_istri }}</td>
                                    <td>{{ $gr->tmt_pns }}</td>
                                    <td>{{ $gr->lisensi }}</td>
                                    <td>{{ $gr->diklat_kep }}</td>
                                    <td>{{ $gr->keahlian_braille }}</td>
                                    <td>{{ $gr->keahlian_bhs_isyarat }}</td>
                                    <td>{{ $gr->npwp }}</td>
                                    <td>{{ $gr->nm_wjb_pajak }}</td>
                                    <td>{{ $gr->kewarganegaraan }}</td>
                                    <td>{{ $gr->bank }}</td>
                                    <td>{{ $gr->nmr_rek_bank }}</td>
                                    <td>{{ $gr->rek_nama }}</td>
                                    <td>{{ $gr->nik_gr }}</td>
                                    <td>{{ $gr->no_kk }}</td>
                                    <td>{{ $gr->karpeg }}</td>
                                    <td>{{ $gr->karis_karsu }}</td>
                                    <td>{{ $gr->lintang }}</td>
                                    <td>{{ $gr->bujur }}</td>
                                    <td>{{ $gr->nuks }}</td>
                                </tr>
                                @empty
                                <td colspan="4" class="table-active text-center">Tidak Ada Data</td>
                                @endforelse
                            </tbody>
                        </table>
                        Halaman : {{ $guru->currentPage() }} <br/>
                        Jumlah Peserta Didik : {{ $guru->total() }} <br/>
                    
                        {{ $guru->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('modal')
<form action="/gr" method="post" enctype="multipart/form-data">
    @csrf
    <div class="modal fade text-left" id="ModalCreate" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Import Data</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="input-group mb-3" id="ModalCreate">
                        <input type="file" name="file" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
                        <button class="btn btn-primary" type="submit" id="button-addon2">Import</button>
                    </div>
                </div>
            </div>
        </div>
    </div>  
</form>
@endsection