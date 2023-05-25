<?php

namespace App\Exports;

use App\Models\StudentInbound;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;


class ExportStudentInbound implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return StudentInbound::all();
    }

    public function headings(): array
    {
        return [
            'id',
            'Nama',
            'Institusi_Asal',
            'Fakultas',
            'Prodi',
            'Negara_Asal',
            'Nama_Program',
            'Durasi_Program',
            'Email',
            'PIC',
        ];
    }
}