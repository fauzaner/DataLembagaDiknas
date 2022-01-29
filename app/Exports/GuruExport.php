<?php

namespace App\Exports;

use App\Models\Guru;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class GuruExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Guru::all();
    }

    public function headings(): array
    {
        return [
            'Nama',
            'NUPTK',
            'JK',
            'Tempat Lahir',
            'Tanggal Lahir',
            'NIP',
            'Status Kepegawaian',
            'Jenis PTK',
            'Agama',
            'Alamat Jalan',
            'RT',
            'RW',
            'Nama Dusun',
            'Desa/Kelurahan',
            'Kecamatan',
            'Kode Pos',
            'Telepon',
            'HP',
            'E-Mail',
            'Tugas Tambahan',
            'SK CPNS',
            'SK Pengangkatan',
            'TMT Pengangkatan',
            'Lembaga Pengangkatan',
            'Pangkat Golongan',
            'Sumber Gaji',
            'Nama Ibu',
            'Status Perkawinan',
            'Nama Suami/Istri',
            'NIP Suami/Istri',
            'Pekerjaan Suami/Istri',
            'TMT PNS',
            'Sudah Lisensi Kepala Sekolah',
            'Pernah Diklat Kepegawaian',
            'Keahlian Braille',
            'Keahlian Bahasa Isyarat',
            'NPWP',
            'Nama Wajib Pajak',
            'Kewarganegaraan',
            'Bank',
            'Nomor Rekening Bank',
            'Rekening Nama',
            'NIK',
            'No. KK',
            'Karpeg',
            'Karis/Kartu',
            'Lintang',
            'Bujur',
            'NUKS',
        ];
    }
}
