@extends('layouts.main')
@section('content')

<div class="data-pesdik relative flex items-top justify-center min-h-screen bg-gray-100 sm:items-center sm:pt-0">
    <div class="container overflow-x-scroll">
        <div class="card-user shadow mb-4">
            <div class="card-header py-3">
                <div class="col-md-12">
                    <h1 class="m-0 font-weight-bold" style="color: 	#8B0000;">Data Peserta Didik</h1>
                    <button style="float: right; font-weight: 600; background: 	#3CB371; color: white;" class="btn btn-success float-right mb-1" type="button" data-toggle="modal" data-target="#ModalCreate">
                        Import
                    </button>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive nowrap">
                    <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example" tabindex="0">
                        <table class="table table-hover table-bordered yajra-datatable" width="100%" cellspacing="0">
                            <thead>
                                <tr class="text-center">
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>NIPD</th>
                                    <th>JK</th>
                                    <th>NISN</th>
                                    <th>Tempat Lahir</th>
                                    <th>Tanggal Lahir</th>
                                    <th>NIK</th>
                                    <th>Agama</th>
                                    <th>Alamat</th>
                                    <th>RT</th>
                                    <th>RW</th>
                                    <th>Dusun</th>
                                    <th>Kelurahan</th>
                                    <th>Kecamatan</th>
                                    <th>Kode Pos</th>
                                    <th>Jenis Tinggal</th>
                                    <th>Alat Transportasi</th>
                                    <th>Telepon</th>
                                    <th>HP</th>
                                    <th>E-Mail</th>
                                    <th>SKHUN</th>
                                    <th>Penerima KPS</th>
                                    <th>No. KPS</th>
                                    <th>Nama Ayah</th>
                                    <th>Tahun Lahir Ayah</th>
                                    <th>Jenjang Pendidikan Ayah</th>
                                    <th>Pekerjaan Ayah</th>
                                    <th>Penghasilan Ayah</th>
                                    <th>NIK Ayah</th>
                                    <th>Nama Ibu</th>
                                    <th>Tahun Lahir Ibu</th>
                                    <th>Jenjang Pendidikan Ibu</th>
                                    <th>Pekerjaan Ibu</th>
                                    <th>Penghasilan Ibu</th>
                                    <th>NIK Ibu</th>
                                    <th>Nama Wali</th>
                                    <th>Tahun Lahir Wali</th>
                                    <th>Jenjang Pendidikan Wali</th>
                                    <th>Pekerjaan Wali</th>
                                    <th>Penghasilan Wali</th>
                                    <th>NIK Wali</th>
                                    <th>Rombel Saat Ini</th>
                                    <th>No Peserta UN</th>
                                    <th>No Seri Ijazah</th>
                                    <th>Nomor KIP</th>
                                    <th>Nama di KIP</th>
                                    <th>Nomor KKS</th>
                                    <th>No Registrasi Akta Lahir</th>
                                    <th>Bank</th>
                                    <th>Nomor Rekening Bank</th>
                                    <th>Rekening Atas Nama</th>
                                    <th>Layak PIP(usulan dari sekolah)</th>
                                    <th>Alasan Layak PIP</th>
                                    <th>Kebutuhan Khusus</th>
                                    <th>Sekolah Asal</th>
                                    <th>Anak ke-berapa</th>
                                    <th>Lintang</th>
                                    <th>Bujur</th>
                                    <th>No KK</th>
                                    <th>Berat Badan</th>
                                    <th>Tinggi Badan</th>
                                    <th>Lingkar Kepala</th>
                                    <th>Jumlah Saudara Kandung</th>
                                    <th>Jarak Rumah ke Sekolah(KM)</th>
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
                        Halaman : {{ $peserta_didik->currentPage() }} <br/>
                        Jumlah Peserta Didik : {{ $peserta_didik->total() }} <br/>
                    
                        {{ $peserta_didik->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('modal')
<form action="/pd" method="post" enctype="multipart/form-data">
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