@extends('layouts.main_supadmin')
@section('content')
<span class="text">Pesdik</span>
    <div class="data-master relative flex items-top justify-center min-h-screen bg-gray-100 sm:items-center sm:pt-0">
    <div class="container overflow-x-scroll">
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
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">NUPTK</th>
                                    <th scope="col">JK</th>
                                    <th scope="col">Tempat Lahir</th>
                                    <th scope="col">Tanggal Lahir</th>
                                    <th scope="col">NIP</th>
                                    <th scope="col">Status Kepegawaian</th>
                                    <th scope="col">Jenis PTK</th>
                                    <th scope="col">Agama</th>
                                    <th scope="col">Alamat Jalan</th>
                                    <th scope="col">RT</th>
                                    <th scope="col">RW</th>
                                    <th scope="col">Nama Dusun</th>
                                    <th scope="col">Desa/Kelurahan</th>
                                    <th scope="col">Kecamatan</th>
                                    <th scope="col">Kode Pos</th>
                                    <th scope="col">Telepon</th>
                                    <th scope="col">HP</th>
                                    <th scope="col">E-Mail</th>
                                    <th scope="col">Tugas Tambahan</th>
                                    <th scope="col">SK CPNS</th>
                                    <th scope="col">SK Pengangkatan</th>
                                    <th scope="col">TMT Pengangkatan</th>
                                    <th scope="col">Lembaga Pengangkatan</th>
                                    <th scope="col">Pangkat Golongan</th>
                                    <th scope="col">Sumber Gaji</th>
                                    <th scope="col">Nama Ibu</th>
                                    <th scope="col">Status Perkawinan</th>
                                    <th scope="col">Nama Suami/Istri</th>
                                    <th scope="col">NIP Suami/Istri</th>
                                    <th scope="col">Pekerjaan Suami/Istri</th>
                                    <th scope="col">TMT PNS</th>
                                    <th scope="col">Sudah Lisensi Kepala Sekolah</th>
                                    <th scope="col">Pernah Diklat Kepegawaian</th>
                                    <th scope="col">Keahlian Braille</th>
                                    <th scope="col">Keahlian Bahasa Isyarat</th>
                                    <th scope="col">NPWP</th>
                                    <th scope="col">Nama Wajib Pajak</th>
                                    <th scope="col">Kewarganegaraan</th>
                                    <th scope="col">Bank</th>
                                    <th scope="col">Nomor Rekening Bank</th>
                                    <th scope="col">Rekening Nama</th>
                                    <th scope="col">NIK</th>
                                    <th scope="col">No. KK</th>
                                    <th scope="col">Karpeg</th>
                                    <th scope="col">Karis/Kartu</th>
                                    <th scope="col">Lintang</th>
                                    <th scope="col">Bujur</th>
                                    <th scope="col">NUKS</th>
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