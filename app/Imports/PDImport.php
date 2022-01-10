<?php

namespace App\Imports;

use App\Models\PesertaDidik;
use Maatwebsite\Excel\Concerns\ToModel;

class PDImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new PesertaDidik([
            'nama_pd' => $row[0],
            'nipd' => $row[1],
            'jenis_kelamin' => $row[2],
            'nisn' => $row[3],
            'tmp_lhr' => $row[4],
            'tgl_lhr' => $row[5],
            'nik_pd' => $row[6],
            'agama' => $row[7],
            'alamat' => $row[8],
            'rt' => $row[9],
            'rw' => $row[10],
            'dusun' => $row[11],
            'kelurahan' => $row[12],
            'kecamatan' => $row[13],
            'kode_pos' => $row[14],
            'jenis_tinggal' => $row[15],
            'transportasi' => $row[16],
            'no_telp' => $row[17],
            'no_hp' => $row[18],
            'email' => $row[19],
            'skhun' => $row[20],
            'penerima_kps' => $row[21],
            'no_kps' => $row[22],
            'nama_ayah' => $row[23],
            'thn_lhr_ayah' => $row[24],
            'pend_ayah' => $row[25],
            'pekerjaan_ayah' => $row[26],
            'penghasilan_ayah' => $row[27],
            'nik_ayah' => $row[28],
            'nama_ibu' => $row[29],
            'thn_lhr_ibu' => $row[30],
            'pend_ibu' => $row[31],
            'pekerjaan_ibu' => $row[32],
            'penghasilan_ibu' => $row[33],
            'nik_ibu' => $row[34],
            'nama_wali' => $row[35],
            'thn_lhr_wali' => $row[36],
            'pend_wali' => $row[37],
            'pekerjaan_wali' => $row[38],
            'penghasilan_wali' => $row[39],
            'nik_wali' => $row[40],
            'tingkat_rombel' => $row[41],
            'no_peserta_un' => $row[42],
            'no_seri_ijazah' => $row[43],
            'penerima_kip' => $row[44],
            'nomor_kip' => $row[45],
            'nama_kip' => $row[46],
            'no_kks' => $row[47],
            'no_regis_akta' => $row[48],
            'bank' => $row[49],
            'no_rek_bank' => $row[50],
            'rekening_atas_nama' => $row[51],
            'layak_pip' => $row[52],
            'alasan_pip' => $row[53],
            'keb_khusus' => $row[54],
            'sekolah_asal' => $row[55],
            'anak_ke' => $row[56],
            'lintang' => $row[57],
            'bujur' => $row[58],
            'no_kk' => $row[59],
            'berat_badan' => $row[60],
            'tinggi_badan' => $row[61],
            'lingkar_kepala' => $row[62],
            'jml_saudara' => $row[63],
            'jarak_ke_sekolah' => $row[64],
        ]);
    }

    public function headingRow(): int
    {
        return 1;
    }
}
