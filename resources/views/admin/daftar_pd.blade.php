@extends('layouts.main_admin')
@section('content')
<<<<<<< HEAD
<span class="text-title">Peserta Didik</span>
<div class="data-master">
=======
<div class="data-pesdik relative flex items-top justify-center min-h-screen bg-gray-100 sm:items-center sm:pt-0">
<span class="text">Peserta Didik</span>
<div class="data-master relative flex items-top min-h-screen sm:pt-0">
>>>>>>> 7928e38be46e03c5f1078b4932d1f46b70865fe5
    <div class="container overflow-x-scroll">
        <div class="card-user shadow mb-4">
            <div class="card-header py-3">
                <div class="col-md-12">
                    <h1 class="m-0 font-weight-bold" style="color: 	#8B0000;">Data Peserta Didik</h1>
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
                    <button style="float: right; font-weight: 600; background: 	#3CB371; color: white;" class="btn btn-success float-right mb-1" type="button" data-toggle="modal" data-target="#ModalCreate">
=======
>>>>>>> 13884a07b643174c9aa5450ff538c236ebef73c7
>>>>>>> 48f3367597c45d93df94bcf3ff0444adc68d68c7
>>>>>>> 7928e38be46e03c5f1078b4932d1f46b70865fe5
                    <button style="float: right; font-weight: 600; background: 	#3CB371; color: white;" class="btn btn-import btn-success float-right mb-1" type="button" data-toggle="modal" data-target="#ModalCreate">
                        Import
                    </button>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example" tabindex="0">
                        <table class="table table-hover table-bordered yajra-datatable" width="100%" cellspacing="0">
                            <thead>
                                <tr class="text-center">
                                    <th style="min-width:20px">No</th>
                                    <th style="min-width:250px">Nama</th>
                                    <th style="min-width:150px">NIPD</th>
                                    <th style="min-width:110px">Jenis Kelamin</th>
                                    <th style="min-width:100px">NISN</th>
                                    <th style="min-width:120px">Tempat Lahir</th>
                                    <th style="min-width:120px">Tanggal Lahir</th>
                                    <th style="min-width:150px">NIK</th>
                                    <th style="min-width:100px">Agama</th>
                                    <th style="min-width:150px">Alamat</th>
                                    <th>RT</th>
                                    <th>RW</th>
                                    <th>Dusun</th>
                                    <th>Kelurahan</th>
                                    <th style="min-width:100px">Kecamatan</th>
                                    <th style="min-width:100px">Kode Pos</th>
                                    <th style="min-width:150px">Jenis Tinggal</th>
                                    <th style="min-width:150px">Alat Transportasi</th>
                                    <th style="min-width:100px">Telepon</th>
                                    <th style="min-width:100px">HP</th>
                                    <th style="min-width:200px">E-Mail</th>
                                    <th style="min-width:200px">SKHUN</th>
                                    <th style="min-width:150px">Penerima KPS</th>
                                    <th style="min-width:200px">No. KPS</th>
                                    <th style="min-width:200px">Nama Ayah</th>
                                    <th style="min-width:150px">Tahun Lahir Ayah</th>
                                    <th style="min-width:200px">Jenjang Pendidikan Ayah</th>
                                    <th style="min-width:200px">Pekerjaan Ayah</th>
                                    <th style="min-width:200px">Penghasilan Ayah</th>
                                    <th style="min-width:150px">NIK Ayah</th>
                                    <th style="min-width:200px">Nama Ibu</th>
                                    <th style="min-width:150px">Tahun Lahir Ibu</th>
                                    <th style="min-width:200px">Jenjang Pendidikan Ibu</th>
                                    <th style="min-width:200px">Pekerjaan Ibu</th>
                                    <th style="min-width:200px">Penghasilan Ibu</th>
                                    <th style="min-width:150px">NIK Ibu</th>
                                    <th style="min-width:200px">Nama Wali</th>
                                    <th style="min-width:150px">Tahun Lahir Wali</th>
                                    <th style="min-width:200px">Jenjang Pendidikan Wali</th>
                                    <th style="min-width:200px">Pekerjaan Wali</th>
                                    <th style="min-width:200px">Penghasilan Wali</th>
                                    <th style="min-width:150px">NIK Wali</th>
                                    <th style="min-width:200px">Rombel Saat Ini</th>
                                    <th style="min-width:200px">No Peserta UN</th>
                                    <th style="min-width:200px">No Seri Ijazah</th>
                                    <th style="min-width:200px">Penerima KIP</th>
                                    <th style="min-width:200px">Nomor KIP</th>
                                    <th style="min-width:200px">Nama di KIP</th>
                                    <th style="min-width:200px">Nomor KKS</th>
                                    <th style="min-width:200px">No Registrasi Akta Lahir</th>
                                    <th style="min-width:200px">Bank</th>
                                    <th style="min-width:200px">Nomor Rekening Bank</th>
                                    <th style="min-width:200px">Rekening Atas Nama</th>
                                    <th style="min-width:200px">Layak PIP(usulan dari sekolah)</th>
                                    <th style="min-width:200px">Alasan Layak PIP</th>
                                    <th style="min-width:200px">Kebutuhan Khusus</th>
                                    <th style="min-width:200px">Sekolah Asal</th>
                                    <th style="min-width:200px">Anak ke-berapa</th>
                                    <th style="min-width:150px">Lintang</th>
                                    <th style="min-width:150px">Bujur</th>
                                    <th style="min-width:150px">No KK</th>
                                    <th style="min-width:200px">Berat Badan</th>
                                    <th style="min-width:200px">Tinggi Badan</th>
                                    <th style="min-width:200px">Lingkar Kepala</th>
                                    <th style="min-width:200px">Jumlah Saudara Kandung</th>
                                    <th style="min-width:200px">Jarak Rumah ke Sekolah(KM)</th>
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
                                    <td>{{ $pd->no_kps }}</td>
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
<form action="/pd" method="POST" enctype="multipart/form-data">
<form action="/pd/import" method="POST" enctype="multipart/form-data"> 
    @csrf
    <div class="modal pop-up fade text-left" id="ModalCreate" tabindex="-1" role="dialog" aria-hidden="true">
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