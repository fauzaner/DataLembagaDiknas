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
                                <tr class="text-center" style="max-width:20px">
                                    <th>No</th>
                                    <th style="min-width:210px">Nama Sekolah</th>
                                    <th>NPSN</th>
                                    <th style="min-width:150px">Jenjang Pendidikan</th>
                                    <th style="min-width:120px">Status Sekolah</th>
                                    <th style="min-width:250px">Alamat Sekolah</th>
                                    <th>RT</th>
                                    <th>RW</th>
                                    <th style="min-width:80px">Kode Pos</th>
                                    <th style="min-width:150px">Kelurahan</th>
                                    <th style="min-width:150px">Kecamatan</th>
                                    <th>Kabupaten/Kota</th>
                                    <th style="min-width:150px">Provinsi</th>
                                    <th style="min-width:200px">Negara</th>
                                    <th style="min-width:200px">Lintang</th>
                                    <th style="min-width:200px">Bujur</th>
                                    <th style="min-width:200px">SK Pendirian Sekolah</th>
                                    <th style="min-width:200px">Tanggal SK Pendirian</th>
                                    <th style="min-width:200px">Status Kepemilikan</th>
                                    <th style="min-width:200px">SK Izin Operasional</th>
                                    <th style="min-width:200px">Tgl SK Izin Operasional</th>
                                    <th style="min-width:200px">Kebutuhan Khusus Dilayani</th>
                                    <th style="min-width:200px">Nomor Rekening</th>
                                    <th style="min-width:200px">Nama Bank</th>
                                    <th style="min-width:200px">Cabang KCP/Unit</th>
                                    <th style="min-width:250px">Rekening Atas Nama</th>
                                    <th style="min-width:200px">MBS</th>
                                    <th style="min-width:200px">Memungut Iuran</th>
                                    <th style="min-width:200px">Nominal/siswa</th>
                                    <th style="min-width:300px">Nama Wajib Pajak</th>
                                    <th style="min-width:200px">NPWP</th>
                                    <th style="min-width:200px">Nomor Telepon</th>
                                    <th style="min-width:200px">Nomor Fax</th>
                                    <th style="min-width:200px">Email</th>
                                    <th style="min-width:200px">Website</th>
                                    <th style="min-width:200px">Waktu Penyelenggaraan</th>
                                    <th style="min-width:200px">Bersedia Menerima Bos?</th>
                                    <th style="min-width:200px">Sertifikasi ISO</th>
                                    <th style="min-width:200px">Sumber Listrik</th>
                                    <th style="min-width:200px">Daya Listrik (watt)</th>
                                    <th style="min-width:200px">Akses Internet</th>
                                    <th style="min-width:200px">Akses Internet Alternatif</th>
                                    <th style="min-width:200px">Sumber air</th>
                                    <th style="min-width:200px">Sumber air minum</th>
                                    <th style="min-width:200px">Kecukupan air bersih</th>
                                    <th style="min-width:500px">Sekolah menyediakan jamban yang dilengkapi dengan fasilitas pendukung untuk digunakan oleh siswa berkebutuhan khusus</th>
                                    <th style="min-width:200px">Tipe jamban</th>
                                    <th style="min-width:200px">Sekolah menyediakan pembalut cadangan</th>
                                    <th style="min-width:400px">Jumlah hari dalam seminggu siswa mengikuti kegiatan cuci tangan berkelompok</th>
                                    <th style="min-width:200px">Jumlah tempat cuci tangan</th>
                                    <th style="min-width:200px">Jumlah tempat cuci tangan rusak</th>
                                    <th style="min-width:400px">Apakah sabun dan air mengalir pada tempat cuci tangan</th>
                                    <th style="min-width:400px">Sekolah pernah menguras tangki septik dalam 3 hingga 5 tahun terakhir dengan truk/motor sedot tinja</th>
                                    <th style="min-width:400px">Sekolah memiliki selokan untuk menghindari genangan air</th>
                                    <th style="min-width:400px">Sekolah menyediakan tempat sampah di setiap ruang kelas (Sesuai permendikbud tentang standar sarpras)</th>
                                    <th style="min-width:400px">Sekolah menyediakan tempat sampah tertutup di setiap unit jamban perempuan</th>
                                    <th style="min-width:400px">Sekolah menyediakan cermin di setiap unit jamban perempuan</th>
                                    <th style="min-width:400px">Sekolah memiliki tempat pembuangan sampah sementara (TPS) yang tertutup</th>
                                    <th style="min-width:400px">Sampah dari tempat pembuangan sampah sementara diangkut secara rutin</th>
                                    <th style="min-width:400px">Ada perencanaan dan penganggaran untuk kegiatan pemeliharaan dan perawatan sanitasi sekolah</th>
                                    <th style="min-width:400px">Ada kegiatan rutin untuk melibatkan siswa untuk memelihara dan merawat fasilitas sanitasi di sekolah</th>
                                    <th style="min-width:400px">Ada, dengan pemerintah daerah</th>
                                    <th style="min-width:400px">Ada, dengan perusahaan swasta</th>
                                    <th style="min-width:400px">Ada, dengan puskesmas</th>
                                    <th style="min-width:400px">Ada, dengan lembaga non-pemerintah</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $no = 0;
                                @endphp
                                @forelse ($profil as $p)
                                <tr class="text-center" >
                                    <th scope="row">{{ ++$no }}</th>
                                    <td>{{ $p->nama_sekolah }}</td>
                                    <td>{{ $p->npsn }}</td>
                                    <td>{{ $p->jenjang_pend }}</td>
                                    <td>{{ $p->status }}</td>
                                    <td>{{ $p->alamat }}</td>
                                    <td>{{ $p->rt }}</td>
                                    <td>{{ $p->rw }}</td>
                                    <td>{{ $p->kode_pos }}</td>
                                    <td>{{ $p->kelurahan }}</td>
                                    <td>{{ $p->kecamatan }}</td>
                                    <td>{{ $p->kota_kabupaten }}</td>
                                    <td>{{ $p->provinsi }}</td>
                                    <td>{{ $p->negara }}</td>
                                    <td>{{ $p->lintang }}</td>
                                    <td>{{ $p->bujur }}</td>
                                    <td>{{ $p->sk_pendirian_sekolah }}</td>
                                    <td>{{ $p->tgl_sk }}</td>
                                    <td>{{ $p->status_milik }}</td>
                                    <td>{{ $p->sk_izin_operasional }}</td>
                                    <td>{{ $p->tgl_sk_izin }}</td>
                                    <td>{{ $p->keb_khusus_dilayani }}</td>
                                    <td>{{ $p->nomor_rekening }}</td>
                                    <td>{{ $p->nama_bank }}</td>
                                    <td>{{ $p->cabang_kcp }}</td>
                                    <td>{{ $p->rekening_atas_nama }}</td>
                                    <td>{{ $p->mbs }}</td>
                                    <td>{{ $p->memungut_iuran }}</td>
                                    <td>{{ $p->nominal_iuran }}</td>
                                    <td>{{ $p->nama_wajib_pajak }}</td>
                                    <td>{{ $p->npwp }}</td>
                                    <td>{{ $p->no_telp }}</td>
                                    <td>{{ $p->no_fax }}</td>
                                    <td>{{ $p->email }}</td>
                                    <td>{{ $p->website }}</td>
                                    <td>{{ $p->waktu_penyelenggaraan }}</td>
                                    <td>{{ $p->bersedia_menerima_bos }}</td>
                                    <td>{{ $p->sertifikasi_iso }}</td>
                                    <td>{{ $p->sumber_listrik }}</td>
                                    <td>{{ $p->daya_listrik }}</td>
                                    <td>{{ $p->akses_internet }}</td>
                                    <td>{{ $p->akses_internet_alternatif }}</td>
                                    <td>{{ $p->sumber_air }}</td>
                                    <td>{{ $p->sumber_air_minum }}</td>
                                    <td>{{ $p->kecukupan_air_bersih }}</td>
                                    <td>{{ $p->menyediakan_jamban }}</td>
                                    <td>{{ $p->tipe_jamban }}</td>
                                    <td>{{ $p->sedia_pembalut_cadangan }}</td>
                                    <td>{{ $p->kegiatan_cuci_tangan }}</td>
                                    <td>{{ $p->jumlah_tempat_cuci_tangan }}</td>
                                    <td>{{ $p->jumlah_tempat_rusak }}</td>
                                    <td>{{ $p->mengalir_di_wastafel }}</td>
                                    <td>{{ $p->saluran_pembuangan_air }}</td>
                                    <td>{{ $p->menguras_tangki_septik }}</td>
                                    <td>{{ $p->tempat_sampah_di_kelas }}</td>
                                    <td>{{ $p->tempat_sampah_di_jamban_perempuan }}</td>
                                    <td>{{ $p->cermin_jamban_perempuan }}</td>
                                    <td>{{ $p->tps_tertutup }}</td>
                                    <td>{{ $p->sampah_diangkut_rutin }}</td>
                                    <td>{{ $p->rencana_sanitasi }}</td>
                                    <td>{{ $p->rutin_merawat_fasilitas }}</td>
                                    <td>{{ $p->ada_pemerintah }}</td>
                                    <td>{{ $p->ada_perusahaan_swasta }}</td>
                                    <td>{{ $p->ada_puskesmas }}</td>
                                    <td>{{ $p->ada_lembaga_non_pemerintah }}</td>
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