<?php

namespace App\Imports;
use App\Models\Profil;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\WithMappedCells;
use Maatwebsite\Excel\Concerns\ToModel;

class ProfilUmumImport implements WithMappedCells, ToModel
{

    public function mapping(): array
    {
        return [
            'Nama Sekolah'  => 'D4',
            'NPSN' => 'D5',
            'Jenjang Pendidikan' => 'D6',
            'Status Sekolah' => 'D7',
            'Alamat Sekolah' => 'D8',
            'RT' => 'D9',
            'RW' => 'F9',
            'Kode Pos' => 'D10',
            'Kelurahan' => 'D11',
            'Kecamatan' => 'D12',
            'Kabupaten/Kota' => 'D13',
            'Provinsi' => 'D14',
            'Negara' => 'D15',
            'Lintang' => 'D16',
            'Bujur' => 'D17',
            'SK Pendirian Sekolah' => 'D19',
            'Tanggal SK Pendirian' => 'D20',
            'Status Kepemilikan' => 'D21',
            'SK Izin Operasional' => 'D22',
            'Tgl SK Izin Operasional' => 'D23',
            'Kebutuhan Khusus Dilayani' => 'D24',
            'Nomor Rekening' => 'D25',
            'Nama Bank' => 'D26',
            'Cabang KCP/Unit' => 'D27',
            'Rekening Atas Nama' => 'D28',
            'MBS' => 'D29',
            'Memungut Iuran' => 'D30',
            'Nominal/siswa' => 'D31',
            'Nama Wajib Pajak' => 'D32',
            'NPWP' => 'D33',
            'Nomor Telepon' => 'D35',
            'Nomor Fax' => 'D36',
            'Email' => 'D37',
            'Website' => 'D38',
            'Waktu Penyelenggaraan' => 'D40',
            'Bersedia Menerima Bos?' => 'D41',
            'Sertifikasi ISO' => 'D42',
            'Sumber Listrik' => 'D43',
            'Daya Listrik (watt)' => 'D44',
            'Akses Internet' => 'D45',
            'Akses Internet Alternatif' => 'D46',
            'Sumber air' => 'D49',
            'Sumber air minum' => 'D50',
            'Kecukupan air bersih' => 'D51',
            'Sekolah menyediakan jamban yang dilengkapi dengan fasilitas pendukung untuk digunakan oleh siswa berkebutuhan khusus' => 'D52',
            'Tipe jamban' => 'D53',
            'Sekolah menyediakan pembalut cadangan' => 'D54',
            'Jumlah hari dalam seminggu siswa mengikuti kegiatan cuci tangan berkelompok' => 'D55',
            'Jumlah tempat cuci tangan' => 'D56',
            'Jumlah tempat cuci tangan rusak' => 'D57',
            'Apakah sabun dan air mengalir pada tempat cuci tangan' => 'D58',
            'Sekolah memiiki saluran pembuangan air limbah dari jamban' => 'D59',
            'Sekolah pernah menguras tangki septik dalam 3 hingga 5 tahun terakhir dengan truk/motor sedot tinja' => 'D60',
            'Sekolah memiliki selokan untuk menghindari genangan air' => 'D62',
            'Sekolah menyediakan tempat sampah di setiap ruang kelas (Sesuai permendikbud tentang standar sarpras)' => 'D63',
            'Sekolah menyediakan tempat sampah tertutup di setiap unit jamban perempuan' => 'D64',
            'Sekolah menyediakan cermin di setiap unit jamban perempuan' => 'D65',
            'Sekolah memiliki tempat pembuangan sampah sementara (TPS) yang tertutup' => 'D66',
            'Sampah dari tempat pembuangan sampah sementara diangkut secara rutin' => 'D67',
            'Ada perencanaan dan penganggaran untuk kegiatan pemeliharaan dan perawatan sanitasi sekolah' => 'D68',
            'Ada kegiatan rutin untuk melibatkan siswa untuk memelihara dan merawat fasilitas sanitasi di sekolah' => 'D69',
            'Ada, dengan pemerintah daerah' => 'D70',
            'Ada, dengan perusahaan swasta' => 'D71',
            'Ada, dengan puskesmas' => 'D72',
            'Ada, dengan lembaga non-pemerintah' => 'D73'
        ];
    }

    public function model(array $row)
    {
        return new Profil([
            'nama_sekolah' => $row['Nama Sekolah'],
            'npsn' => $row['NPSN'],
            'jenjang_pend' => $row['Jenjang Pendidikan'],
            'status' => $row['Status Sekolah'],
            'alamat' => $row['Alamat Sekolah'],
            'rt' => $row['RT'],
            'rw' => $row['RW'],
            'kode_pos' => $row['Kode Pos'],
            'kelurahan' => $row['Kelurahan'],
            'kecamatan' => $row['Kecamatan'],
            'kota_kabupaten' => $row['Kabupaten/Kota'],
            'provinsi' => $row['Provinsi'],
            'negara' => $row['Negara'],
            'lintang' => $row['Lintang'],
            'bujur' => $row['Bujur'],
            'sk_pendirian_sekolah' => $row['SK Pendirian Sekolah'],
            'tgl_sk' => $row['Tanggal SK Pendirian'],
            'status_milik' => $row['Status Kepemilikan'],
            'sk_izin_operasional' => $row['SK Izin Operasional'],
            'tgl_sk_izin' => $row['Tgl SK Izin Operasional'],
            'keb_khusus_dilayani' => $row['Kebutuhan Khusus Dilayani'],
            'nomor_rekening' => $row['Nomor Rekening'],
            'nama_bank' => $row['Nama Bank'],
            'cabang_kcp' => $row['Cabang KCP/Unit'],
            'rekening_atas_nama' => $row['Rekening Atas Nama'],
            'mbs' => $row['MBS'],
            'memungut_iuran' => $row['Memungut Iuran'],
            'nominal_iuran' => $row['Nominal/siswa'],
            'nama_wajib_pajak' => $row['Nama Wajib Pajak'],
            'npwp' => $row['NPWP'],
            'no_telp' => $row['Nomor Telepon'],
            'no_fax' => $row['Nomor Fax'],
            'email' => $row['Email'],
            'website' => $row['Website'],
            'waktu_penyelenggaraan' => $row['Waktu Penyelenggaraan'],
            'bersedia_menerima_bos' => $row['Bersedia Menerima Bos?'],
            'sertifikasi_iso' => $row['Sertifikasi ISO'],
            'sumber_listrik' => $row['Sumber Listrik'],
            'daya_listrik' => $row['Daya Listrik (watt)'],
            'akses_internet' => $row['Akses Internet'],
            'akses_internet_alternatif' => $row['Akses Internet Alternatif'],
            'sumber_air' => $row['Sumber air'],
            'sumber_air_minum' => $row['Sumber air minum'],
            'kecukupan_air_bersih' => $row['Kecukupan air bersih'],
            'menyediakan_jamban' => $row['Sekolah menyediakan jamban yang dilengkapi dengan fasilitas pendukung untuk digunakan oleh siswa berkebutuhan khusus'],
            'tipe_jamban' => $row['Tipe jamban'],
            'sedia_pembalut_cadangan' => $row['Sekolah menyediakan pembalut cadangan'],
            'kegiatan_cuci_tangan' => $row['Jumlah hari dalam seminggu siswa mengikuti kegiatan cuci tangan berkelompok'],
            'jumlah_tempat_cuci_tangan' => $row['Jumlah tempat cuci tangan'],
            'jumlah_tempat_rusak' => $row['Jumlah tempat cuci tangan rusak'],
            'mengalir_di_wastafel' => $row['Apakah sabun dan air mengalir pada tempat cuci tangan'],
            'saluran_pembuangan_air' => $row['Sekolah memiiki saluran pembuangan air limbah dari jamban'],
            'menguras_tangki_septik' => $row['Sekolah pernah menguras tangki septik dalam 3 hingga 5 tahun terakhir dengan truk/motor sedot tinja'],
            'selokan' => $row['Sekolah memiliki selokan untuk menghindari genangan air'],
            'tempat_sampah_di_kelas' => $row['Sekolah menyediakan tempat sampah di setiap ruang kelas (Sesuai permendikbud tentang standar sarpras)'],
            'tempat_sampah_di_jamban_perempuan' => $row['Sekolah menyediakan tempat sampah tertutup di setiap unit jamban perempuan'],
            'cermin_jamban_perempuan' => $row['Sekolah menyediakan cermin di setiap unit jamban perempuan'],
            'tps_tertutup' => $row['Sekolah memiliki tempat pembuangan sampah sementara (TPS) yang tertutup'],
            'sampah_diangkut_rutin' => $row['Sampah dari tempat pembuangan sampah sementara diangkut secara rutin'],
            'rencana_sanitasi' => $row['Ada perencanaan dan penganggaran untuk kegiatan pemeliharaan dan perawatan sanitasi sekolah'],
            'rutin_merawat_fasilitas' => $row['Ada kegiatan rutin untuk melibatkan siswa untuk memelihara dan merawat fasilitas sanitasi di sekolah'],
            'ada_pemerintah' => $row['Ada, dengan pemerintah daerah'],
            'ada_perusahaan_swasta' => $row['Ada, dengan pemerintah daerah'],
            'ada_puskesmas' => $row['Ada, dengan puskesmas'],
            'ada_lembaga_non_pemerintah' => $row['Ada, dengan lembaga non-pemerintah'],
        ]);
    }
}
