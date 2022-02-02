@extends('layouts.main_supadmin')
@section('content')
<span class="text">Pesdik</span>
    <div class="data-master relative flex items-top justify-center min-h-screen bg-gray-100 sm:items-center sm:pt-0">
    <div class="container overflow-x-scroll">
    <form action="/guru/export" method="post" enctype="multipart/form-data">
                    <form action="/guru" method="post" enctype="multipart/form-data">
                        @csrf
                    </form>
        <div class="card-user shadow mb-4">
            <div class="card-header py-3">
            <div class="row">
                <h1 class="font-weight-bold col-md-9" style="color: #8B0000; font-size: 30px;">Data Guru</h1>
                <a href="/guru/export" class="btn  buttonex btn-success col-md-2 mb-2 " target="_blank">Export</a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table style="color: #708090;" class="table table-bordered table-striped yajra-datatable" id="data_users_side" width="100%" cellspacing="0">
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
                                    <td>{{ $gr->nama_tendik }}</td>
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
                                    <td>{{ $gr->nik_tendik }}</td>
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