@extends('layouts.main')
@section('content')
    <div class="data-pesdik relative flex items-top justify-center min-h-screen bg-gray-100 sm:items-center sm:pt-0">
                    <form action="/tendik/export" method="post" enctype="multipart/form-data">
                    <form action="/tendik" method="post" enctype="multipart/form-data">
                        @csrf
                    </form>
        <div class="card-user shadow mb-4">
            <div class="card-header py-3">
            <div class="row">
                <h1 class="font-weight-bold col-md-9" style="color: #8B0000; font-size: 30px;">Data Tenaga Kependidikan</h1>
                <a href="/tendik/export" class="btn  buttonex btn-success col-md-2 mb-2 " target="_blank">Export</a>
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
                                @forelse ($tendik as $tk)
                                <tr>
                                    <th scope="row">{{ ++$no }}</th>
                                    <td>{{ $tk->nama_tendik }}</td>
                                    <td>{{ $tk->nuptk }}</td>
                                    <td>{{ $tk->jk }}</td>
                                    <td>{{ $tk->tmp_lhr }}</td>
                                    <td>{{ $tk->tgl_lhr }}</td>
                                    <td>{{ $tk->nip }}</td>
                                    <td>{{ $tk->status_kep }}</td>
                                    <td>{{ $tk->jenis_ptk }}</td>
                                    <td>{{ $tk->agama }}</td>
                                    <td>{{ $tk->almt_jln }}</td>
                                    <td>{{ $tk->rt }}</td>
                                    <td>{{ $tk->rw }}</td>
                                    <td>{{ $tk->nm_dusun }}</td>
                                    <td>{{ $tk->desa_kelurahan }}</td>
                                    <td>{{ $tk->kecamatan }}</td>
                                    <td>{{ $tk->kd_pos }}</td>
                                    <td>{{ $tk->telp }}</td>
                                    <td>{{ $tk->hp }}</td>
                                    <td>{{ $tk->email }}</td>
                                    <td>{{ $tk->tgs_tambahan }}</td>
                                    <td>{{ $tk->sk_cpns }}</td>
                                    <td>{{ $tk->sk_pengangkatan }}</td>
                                    <td>{{ $tk->tmt_pengangkatan }}</td>
                                    <td>{{ $tk->lmb_pengangkatan }}</td>
                                    <td>{{ $tk->pangkat_gol }}</td>
                                    <td>{{ $tk->sumber_gaji }}</td>
                                    <td>{{ $tk->nm_ibu }}</td>
                                    <td>{{ $tk->nama_ibu }}</td>
                                    <td>{{ $tk->status_perkawinan }}</td>
                                    <td>{{ $tk->nm_suami_istri }}</td>
                                    <td>{{ $tk->nip_suami_istri }}</td>
                                    <td>{{ $tk->pekerjaan_suami_istri }}</td>
                                    <td>{{ $tk->tmt_pns }}</td>
                                    <td>{{ $tk->lisensi }}</td>
                                    <td>{{ $tk->diklat_kep }}</td>
                                    <td>{{ $tk->keahlian_braille }}</td>
                                    <td>{{ $tk->keahlian_bhs_isyarat }}</td>
                                    <td>{{ $tk->npwp }}</td>
                                    <td>{{ $tk->nm_wjb_pajak }}</td>
                                    <td>{{ $tk->kewarganegaraan }}</td>
                                    <td>{{ $tk->bank }}</td>
                                    <td>{{ $tk->nmr_rek_bank }}</td>
                                    <td>{{ $tk->rek_nama }}</td>
                                    <td>{{ $tk->nik_tendik }}</td>
                                    <td>{{ $tk->no_kk }}</td>
                                    <td>{{ $tk->karpeg }}</td>
                                    <td>{{ $tk->karis_karsu }}</td>
                                    <td>{{ $tk->lintang }}</td>
                                    <td>{{ $tk->bujur }}</td>
                                    <td>{{ $tk->nuks }}</td>
                                </tr>
                                @empty
                                <td colspan="4" class="table-active text-center">Tidak Ada Data</td>
                                @endforelse
                            </tbody>
                        </table>
                        Halaman : {{ $tendik->currentPage() }} <br/>
                        Jumlah Peserta Didik : {{ $tendik->total() }} <br/>
                    
                        {{ $tendik->links() }}
                     </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection