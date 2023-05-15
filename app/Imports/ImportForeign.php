<?php

namespace App\Imports;

use App\Models\Post;
use Maatwebsite\Excel\Concerns\ToModel;

class ImportForeign implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Post([
            'Nama'=> $row[0],
            'NIM' => $row[1],
            'Fakultas_Prodi' => $row[2],
            'IPK' => $row[3],
            'BIPA' => $row[4],
            'Jenjang' => $row[5],
            'Status' => $row[6],
            'Angkatan' => $row[7],
            'Gender' => $row[8],
            'Alamat' => $row[9],
            'No_Hp' => $row[10],
            'Negara_Asal' => $row[11],
            'Pendamping_Akademik' => $row[12],
        ]);
    }
}