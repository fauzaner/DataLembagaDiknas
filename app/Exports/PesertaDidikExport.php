<?php

namespace App\Exports;

use App\Models\PesertaDidik;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PesertaDidikExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return PesertaDidik::all();
    }

    public function headings(): array
    {
        return [
            'Nama',
            'NIPD',
            'JK',
            'NISN',
            'Tempat Lahir',
            'Tanggal Lahir',
            'NIK',
            'Agama',
            'Alamat',
            'RT',
            'RW',
            'Dusun',
            'Kelurahan',
            'Kecamatan',
            'Kode Pos',
            'Jenis Tinggal',
            'Alat Transportasi',
            'Telepon',
            'HP',
            'E-Mail',
            'SKHUN',
            'Penerima KPS',
            'No. KPS',
            'Nama Ayah',
            'Tahun Lahir Ayah',
            'Jenjang Pendidikan Ayah',
            'Pekerjaan Ayah',
            'Penghasilan Ayah',
            'NIK Ayah',
            'Nama Ibu',
            'Tahun Lahir Ibu',
            'Jenjang Pendidikan Ibu',
            'Pekerjaan Ibu',
            'Penghasilan Ibu',
            'NIK Ibu',
            'Nama Wali',
            'Tahun Lahir Wali',
            'Jenjang Pendidikan Wali',
            'Pekerjaan Wali',
            'Penghasilan Wali',
            'NIK Wali',
            'Rombel Saat Ini',
            'No Peserta UN',
            'No Seri Ijazah',
            'Nomor KIP',
            'Nama di KIP',
            'Nomor KKS',
            'No Registrasi Akta Lahir',
            'Bank',
            'Nomor Rekening Bank',
            'Rekening Atas Nama',
            'Layak PIP(usulan dari sekolah)',
            'Alasan Layak PIP',
            'Kebutuhan Khusus',
            'Sekolah Asal',
            'Anak ke-berapa',
            'Lintang',
            'Bujur',
            'No KK',
            'Berat Badan',
            'Tinggi Badan',
            'Lingkar Kepala',
            'Jumlah Saudara Kandung',
            'Jarak Rumah ke Sekolah(KM)',
        ];
    }
}
