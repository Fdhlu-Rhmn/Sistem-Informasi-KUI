<?php

namespace App\Exports;

use App\Models\StudentInbound;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExportStudentInbound implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return StudentInbound::all();
    }
}
