<?php

namespace App\Imports;

use App\Models\Profil;
use Maatwebsite\Excel\Concerns\ToModel;

class ProfilImport implements ToModel
{
    /**
    * @param array $column
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $column)
    {
        if ($column[69] == "✓"){
            $ada_pemerintah = 1;
        }else{
            $ada_pemerintah = 0;
        }

        return new Profil([
            'nama_sekolah' => $column[3],
            'npsn' => $column[4],
            'jenjang_pend' => $column[5],
            'status' => $column[6],
            'alamat'=> $column[7],
            'ada_pemerintah'=> $ada_pemerintah,
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
