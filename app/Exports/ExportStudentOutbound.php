<?php

namespace App\Exports;

use App\Models\StudentOutbound;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ExportStudentOutbound implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return StudentOutbound::all();
    }

    public function headings(): array
    {
        return [
            'id',
            'Nama',
            'Institusi_Tujuan',
            'Fakultas',
            'Prodi',
            'Negara_Tujuan',
            'Nama_Program',
            'Durasi',
            'Email',
        ];
    }
}