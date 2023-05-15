<?php

namespace App\Imports;

use App\Models\StudentOutbound;
use Maatwebsite\Excel\Concerns\ToModel;

class ImportStudentOutbound implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new StudentOutbound([
            'Nama'=> $row[0],
            'Institusi_Asal' => $row[1],
            'Fakultas' => $row[2],
            'Prodi' => $row[3],
            'Negara_Asal' => $row[4],
            'Nama_Program' => $row[5],
            'Durasi_Program' => $row[6],
            'Email' => $row[7],
            'PIC' => $row[8],        
        ]);
    }
}