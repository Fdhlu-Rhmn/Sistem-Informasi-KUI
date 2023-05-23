<?php

namespace App\Imports;

use App\Models\Outbound;
use Maatwebsite\Excel\Concerns\ToModel;

class ImportOutbound implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Outbound([
            'name'=> $row[0],
            'institusi_tujuan'=> $row[1],
            'fakultas'=> $row[2],
            'prodi'=> $row[3],
            'negara_tujuan'=> $row[4],
            'program'=> $row[5],
            'durasi_program'=> $row[6],
            'email'=> $row[7],
        ]);
    }
}