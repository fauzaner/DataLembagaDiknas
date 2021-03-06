<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    use HasFactory;
    public $table = "profil";
    public $timestamps = true;
    protected $fillable = [
        'nama_sekolah',
        'npsn',
        'jenjang_pend',
        'status',
        'alamat',
        'rt',
        'rw',
        'kode_pos',
        'kelurahan',
        'kecamatan',
        'kota_kabupaten',
        'provinsi',
        'negara',
        'lintang',
        'bujur',
        'sk_pendirian_sekolah',
        'tgl_sk',
        'status_milik',
        'sk_izin_operasional',
        'tgl_sk_izin',
        'keb_khusus_dilayani',
        'nomor_rekening',
        'nama_bank',
        'cabang_kcp',
        'rekening_atas_nama',
        'mbs',
        'memungut_iuran',
        'nominal_iuran',
        'nama_wajib_pajak',
        'npwp',
        'no_telp',
        'no_fax',
        'email',
        'website',
        'waktu_penyelenggaraan',
        'bersedia_menerima_bos',
        'sertifikasi_iso',
        'sumber_listrik',
        'daya_listrik',
        'akses_internet',
        'akses_internet_alternatif',
        'sumber_air',
        'sumber_air_minum',
        'kecukupan_air_bersih',
        'menyediakan_jamban',
        'tipe_jamban',
        'sedia_pembalut_cadangan',
        'kegiatan_cuci_tangan',
        'jumlah_tempat_cuci_tangan',
        'jumlah_tempat_rusak',
        'mengalir_di_wastafel',
        'saluran_pembuangan_air',
        'menguras_tangki_septik',
        'selokan',
        'tempat_sampah_di_kelas',
        'tempat_sampah_di_jamban_perempuan',
        'cermin_jamban_perempuan',
        'tps_tertutup',
        'sampah_diangkut_rutin',
        'rencana_sanitasi',
        'rutin_merawat_fasilitas',
        'ada_pemerintah',
        'ada_perusahaan_swasta',
        'ada_puskesmas',
        'ada_lembaga_non_pemerintah',
        'jamban_dpt_digunakan_pria',
        'jamban_dpt_digunakan_wanita',
        'jamban_dpt_digunakan_bersama',
        'jamban_tdk_dpt_pria',
        'jamban_tdk_dpt_wanita',
        'jamban_tdk_dpt_bersama',
        'cuci_tangan_guru',
        'cuci_tangan_kelas',
        'cuci_tangan_toilet',
        'cuci_tangan_selasar',
        'cuci_tangan_uks',
        'cuci_tangan_kantin',
        'kebersihan_guru',
        'kebersihan_kelas',
        'kebersihan_toilet',
        'kebersihan_selasar',
        'kebersihan_uks',
        'kebersihan_kantin',
        'pemeliharaan_guru',
        'pemeliharaan_kelas',
        'pemeliharaan_toilet',
        'pemeliharaan_selasar',
        'pemeliharaan_uks',
        'pemeliharaan_kantin',
        'keamanan_guru',
        'keamanan_kelas',
        'keamanan_toilet',
        'keamanan_selasar',
        'keamanan_uks',
        'keamanan_kantin',
        'minum_guru',
        'minum_kelas',
        'minum_toilet',
        'minum_selasar',
        'minum_uks',
        'minum_kantin',
    ];
}