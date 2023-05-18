<?php

namespace App\Exports;

use App\Models\StudentOutbound;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExportStudentOutbound implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return StudentOutbound::all();
    }
}
