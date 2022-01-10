@extends('main')
@section('content')
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 sm:items-center sm:pt-0">
            <div class="container">
                <div class="row">
                    <form action="/pd" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="file" name="file" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
                            <button class="btn btn-primary" type="submit" id="button-addon2">Import</button>
                        </div>
                    </form>
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Name</th>
                                <th scope="col">NIPD</th>
                                <th scope="col">JK</th>
                                <th scope="col">NISN</th>
                                <th scope="col">Tempat Lahir</th>
                                <th scope="col">Tanggal Lahir</th>
                                <th scope="col">NIK</th>
                                <th scope="col">Agama</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">RT</th>
                                <th scope="col">RW</th>
                                <th scope="col">Dusun</th>
                                <th scope="col">Kelurahan</th>
                                <th scope="col">Kecamatan</th>
                                <th scope="col">Kode Pos</th>
                                <th scope="col">Jenis Tinggal</th>
                                <th scope="col">Alat Transportasi</th>
                                <th scope="col">Telepon</th>
                                <th scope="col">HP</th>
                                <th scope="col">E-Mail</th>
                                <th scope="col">SKHUN</th>
                                <th scope="col">Penerima KPS</th>
                                <th scope="col">No. KPS</th>
                                <th scope="col">Nama Ayah</th>
                                <th scope="col">Tahun Lahir Ayah</th>
                                <th scope="col">Jenjang Pendidikan Ayah</th>
                                <th scope="col">Pekerjaan Ayah</th>
                                <th scope="col">Penghasilan Ayah</th>
                                <th scope="col">NIK Ayah</th>
                                <th scope="col">Nama Ibu</th>
                                <th scope="col">Tahun Lahir Ibu</th>
                                <th scope="col">Jenjang Pendidikan Ibu</th>
                                <th scope="col">Pekerjaan Ibu</th>
                                <th scope="col">Penghasilan Ibu</th>
                                <th scope="col">NIK Ibu</th>
                                <th scope="col">Nama Wali</th>
                                <th scope="col">Tahun Lahir Wali</th>
                                <th scope="col">Jenjang Pendidikan Wali</th>
                                <th scope="col">Pekerjaan Wali</th>
                                <th scope="col">Penghasilan Wali</th>
                                <th scope="col">NIK Wali</th>
                                <th scope="col">Rombel Saat Ini</th>
                                <th scope="col">No Peserta UN</th>
                                <th scope="col">No Seri Ijazah</th>
                                <th scope="col">Nomor KIP</th>
                                <th scope="col">Nama di KIP</th>
                                <th scope="col">Nomor KKS</th>
                                <th scope="col">No Registrasi Akta Lahir</th>
                                <th scope="col">Bank</th>
                                <th scope="col">Nomor Rekening Bank</th>
                                <th scope="col">Rekening Atas Nama</th>
                                <th scope="col">Layak PIP(usulan dari sekolah)</th>
                                <th scope="col">Alasan Layak PIP</th>
                                <th scope="col">Kebutuhan Khusus</th>
                                <th scope="col">Sekolah Asal</th>
                                <th scope="col">Anak ke-berapa</th>
                                <th scope="col">Lintang</th>
                                <th scope="col">Bujur</th>
                                <th scope="col">No KK</th>
                                <th scope="col">Berat Badan</th>
                                <th scope="col">Tinggi Badan</th>
                                <th scope="col">Lingkar Kepala</th>
                                <th scope="col">Jumlah Saudara Kandung</th>
                                <th scope="col">Jarak Rumah ke Sekolah(KM)</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $no = 0;
                            @endphp
                            @forelse ($peserta_didik as $pd)
                            <tr>
                                <th scope="row">{{ ++$no }}</th>
                                <td>{{ $pd->nama_pd }}</td>
                                <td>{{ $pd->nipd }}</td>
                                <td>{{ $pd->jenis_kelamin }}</td>
                                <td>{{ $pd->nisn }}</td>
                                <td>{{ $pd->tmp_lhr }}</td>
                                <td>{{ $pd->tgl_lhr }}</td>
                                <td>{{ $pd->nik_pd }}</td>
                                <td>{{ $pd->agama }}</td>
                                <td>{{ $pd->alamat }}</td>
                                <td>{{ $pd->rt }}</td>
                                <td>{{ $pd->rw }}</td>
                                <td>{{ $pd->dusun }}</td>
                                <td>{{ $pd->kelurahan }}</td>
                                <td>{{ $pd->kecamatan }}</td>
                                <td>{{ $pd->kode_pos }}</td>
                                <td>{{ $pd->jenis_tinggal }}</td>
                                <td>{{ $pd->transportasi }}</td>
                                <td>{{ $pd->no_telp }}</td>
                                <td>{{ $pd->no_hp }}</td>
                                <td>{{ $pd->email }}</td>
                                <td>{{ $pd->skhun }}</td>
                                <td>{{ $pd->penerima_kps }}</td>
                                <td>{{ $pd->nama_ayah }}</td>
                                <td>{{ $pd->thn_lhr_ayah }}</td>
                                <td>{{ $pd->pend_ayah }}</td>
                                <td>{{ $pd->pekerjaan_ayah }}</td>
                                <td>{{ $pd->penghasilan_ayah }}</td>
                                <td>{{ $pd->nik_ayah }}</td>
                                <td>{{ $pd->nama_ibu }}</td>
                                <td>{{ $pd->thn_lhr_ibu }}</td>
                                <td>{{ $pd->pend_ibu }}</td>
                                <td>{{ $pd->pekerjaan_ibu }}</td>
                                <td>{{ $pd->penghasilan_ibu }}</td>
                                <td>{{ $pd->nik_ibu }}</td>
                                <td>{{ $pd->nama_wali }}</td>
                                <td>{{ $pd->thn_lhr_wali }}</td>
                                <td>{{ $pd->pend_wali }}</td>
                                <td>{{ $pd->pekerjaan_wali }}</td>
                                <td>{{ $pd->penghasilan_wali }}</td>
                                <td>{{ $pd->nik_wali }}</td>
                                <td>{{ $pd->tingkat_rombel }}</td>
                                <td>{{ $pd->no_peserta_un }}</td>
                                <td>{{ $pd->no_seri_ijazah }}</td>
                                <td>{{ $pd->penerima_kip }}</td>
                                <td>{{ $pd->nomor_kip }}</td>
                                <td>{{ $pd->nama_kip }}</td>
                                <td>{{ $pd->no_kks }}</td>
                                <td>{{ $pd->no_regis_akta }}</td>
                                <td>{{ $pd->bank }}</td>
                                <td>{{ $pd->no_rek_bank }}</td>
                                <td>{{ $pd->rekening_atas_nama }}</td>
                                <td>{{ $pd->layak_pip }}</td>
                                <td>{{ $pd->alasan_pip }}</td>
                                <td>{{ $pd->keb_khusus }}</td>
                                <td>{{ $pd->sekolah_asal }}</td>
                                <td>{{ $pd->anak_ke }}</td>
                                <td>{{ $pd->lintang }}</td>
                                <td>{{ $pd->bujur }}</td>
                                <td>{{ $pd->no_kk }}</td>
                                <td>{{ $pd->berat_badan }}</td>
                                <td>{{ $pd->tinggi_badan }}</td>
                                <td>{{ $pd->lingkar_kepala }}</td>
                                <td>{{ $pd->jml_saudara }}</td>
                                <td>{{ $pd->jarak_ke_sekolah }}</td>
                            </tr>
                            @empty
                            <td colspan="4" class="table-active text-center">Tidak Ada Data</td>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
@endsection