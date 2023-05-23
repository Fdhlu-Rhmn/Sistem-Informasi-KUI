<?php

namespace App\Exports;

use App\Models\Outbound;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;


class ExportOutbound implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Outbound::all();
    }

    public function headings(): array
    {
        return [
            'id',
            'name',
            'institusi_asal',
            'fakultas',
            'prodi',
            'negara_asal',
            'program',
            'durasi_program',
            'email',
        ];
    }
}