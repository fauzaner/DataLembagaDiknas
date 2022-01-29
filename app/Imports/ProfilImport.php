<?php

namespace App\Imports;

use App\Models\Profil;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithStartColumn;

class ProfilImport implements ToModel, WithStartRow, WithStartColumn
{
    /**
    * @param array $column
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $column)
    {
        return new Profil([
            'nama_sekolah' => $column[3],
            'npsn' => $column[4],
            'jenjang_pend' => $column[5],
            'status' => $column[6],
            'alamat'=> $column[7],
        ]);
    }

    public function startColumn(): int
    {
        return 4;
    }

    public function startRow(): int
    {
        return 4;
    }
}
