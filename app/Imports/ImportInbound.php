<?php

namespace App\Imports;

use App\Models\Inbound;
use Maatwebsite\Excel\Concerns\ToModel;

class ImportInbound implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Inbound([
            'name'=> $row[0],
            'institusi_asal'=> $row[1],
            'fakultas'=> $row[2],
            'prodi'=> $row[3],
            'negara_asal'=> $row[4],
            'program'=> $row[5],
            'durasi_program'=> $row[6],
            'email'=> $row[7],
            'PIC'=> $row[8],
        ]);
    }
}