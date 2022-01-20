n <?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profil', function (Blueprint $table) {
            $table->string('nama_sekolah',255);
            $table->string('npsn', 100)->unique()->primary();
            $table->string('jenjang_pend',100);
            $table->string('status',100);
            $table->string('alamat',255);
            $table->string('rt',20);
            $table->string('rw',20);
            $table->string('kode_pos',50);
            $table->string('kelurahan',255);
            $table->string('kecamatan',255);
            $table->string('kota/provinsi',255);
            $table->string('provinsi',255);
            $table->string('negara',255);
            $table->string('lintang',100);
            $table->string('bujur',100);
            $table->string('sk_pendirian_sekolah',255);
            $table->string('tgl_sk',100);
            $table->string('status_milik',255);
            $table->string('sk_izin_operasional',255);
            $table->string('keb_khusus_dilayani',255);
            $table->string('nomor_rekening',255);
            $table->string('nama_bank',100);
            $table->string('cabang_kcp',255);
            $table->string('rekening_atas_nama',255);
            $table->string('mbs',100);
            $table->string('memungut_iuran',100);
            $table->string('nominal_iuran',100);
            $table->string('nama_wajib_pajak',255);
            $table->string('npwp',50);
            $table->string('no_telp',50);
            $table->string('no_fax',50);
            $table->string('email',100);
            $table->string('website',150);
            $table->string('waktu_penyelenggaraan',100);
            $table->string('bersedia_menerima_bos',50);
            $table->string('sertifikasi_iso',100);
            $table->string('sumber_listrik',100);
            $table->string('daya_listrik',100);
            $table->string('akses_internet',100);
            $table->string('akses_internet_alternatif',100);
            $table->string('sumber_air',100);
            $table->string('sumber_air_minum',100);
            $table->string('kecukupan_air_bersih',255);
            $table->string('menyediakan_jamban',100);
            $table->string('tipe_jamban',100);
            $table->string('sedia_pembalut_cadangan',255);
            $table->string('kegiatan_cuci_tangan',100);
            $table->string('jumlah_tempat_cuci_tangan',100);
            $table->string('jumlah_tempat_rusak',100);
            $table->string('mengalir_di_wastafel',100);
            $table->string('saluran_pembuangan_air',100);
            $table->string('menguras_tangki_septik',100);
            $table->string('selokan',100);
            $table->string('tempat_sampah_di_kelas',100);
            $table->string('tempat_sampah_di_jamban_perempuan',100);
            $table->string('cermin_jamban_perempuan',100);
            $table->string('tps_tertutup',100);
            $table->string('sampah_diangkut_rutin',100);
            $table->string('rencana_sanitasi',100);
            $table->string('rutin_merawat_fasilitas',100);
            $table->string('ada_pemerintah',100);
            $table->string('ada_perusahaan_swasta',100);
            $table->string('ada_puskesmas',100);
            $table->string('ada_lembaga_non_pemerintah',100);
            $table->string('jamban_dpt_digunakan_pria',100);
            $table->string('jamban_dpt_digunakan_wanita',100);
            $table->string('jamban_dpt_digunakan_bersama',100);
            $table->string('jam_tdk_dpt_pria',100);
            $table->string('jam_tdk_dpt_wanita',100);
            $table->string('jam_tdk_dpt_bersama',100);
            $table->boolean('cuci_tangan_guru')->default(0);
            $table->boolean('cuci_tangan_kelas')->default(0);
            $table->boolean('cuci_tangan_toilet')->default(0);
            $table->boolean('cuci_tangan_selasar')->default(0);
            $table->boolean('cuci_tangan_uks')->default(0);
            $table->boolean('cuci_tangan_kantin')->default(0);
            $table->boolean('kebersihan_guru')->default(0);
            $table->boolean('kebersihan_kelas')->default(0);
            $table->boolean('kebersihan_toilet')->default(0);
            $table->boolean('kebersihan_selasar')->default(0);
            $table->boolean('kebersihan_uks')->default(0);
            $table->boolean('kebersihan_kantin')->default(0);
            $table->boolean('pemeliharaan_guru')->default(0);
            $table->boolean('pemeliharaan_kelas')->default(0);
            $table->boolean('pemeliharaan_toilet')->default(0);
            $table->boolean('pemeliharaan_selasar')->default(0);
            $table->boolean('pemeliharaan_uks')->default(0);
            $table->boolean('pemeliharaan_kantin')->default(0);
            $table->boolean('keamanan_guru')->default(0);
            $table->boolean('keamanan_kelas')->default(0);
            $table->boolean('keamanan_toilet')->default(0);
            $table->boolean('keamanan_selasar')->default(0);
            $table->boolean('keamanan_uks')->default(0);
            $table->boolean('keamanan_kantin')->default(0);
            $table->boolean('minum_guru')->default(0);
            $table->boolean('minum_kelas')->default(0);
            $table->boolean('minum_toilet')->default(0);
            $table->boolean('minum_selasar')->default(0);
            $table->boolean('minum_uks')->default(0);
            $table->boolean('minum_kantin')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profil');
    }
}
