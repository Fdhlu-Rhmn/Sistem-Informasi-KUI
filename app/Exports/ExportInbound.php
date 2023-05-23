<?php

namespace App\Exports;

use App\Models\Inbound;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;


class ExportInbound implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Inbound::all();
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
            'PIC'
        ];
    }
}