<?php

namespace App\Exports;

use App\Models\Outbound;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExportOutbound implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Outbound::all();
    }
}
