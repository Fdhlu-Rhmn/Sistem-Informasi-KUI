<?php

namespace App\Exports;

use App\Models\Inbound;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExportInbound implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Inbound::all();
    }
}
