@extends('layouts.main')
@section('content')
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 sm:items-center sm:pt-0">
            <div class="container">
                <div class="row">
                    <form action="/guru" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="file" name="file" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
                            <button class="btn btn-primary" type="submit" id="button-addon2">Import</button>
                        </div>
                    </form>
                    <div class="table-responsive">
                        <table class="table table-striped table-hover table-bordered">
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
                    </div>
                </div>
            </div>
        </div>
@endsection