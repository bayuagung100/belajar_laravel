<?php

namespace App\Imports;

use App\Siswa;
use Maatwebsite\Excel\Concerns\ToModel;

class SiswaImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Siswa([
            //$row[0] itu urutan data dari excel yang akan di import 
            //$row[0] = kolom A di excel
            'nama' => $row[1],
            'nis' => $row[2], 
            'alamat' => $row[3],
        ]);
    }
}
