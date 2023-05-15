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
            //
        ]);
    }
}
