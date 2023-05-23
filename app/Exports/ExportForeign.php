<?php

namespace App\Exports;

use App\Models\Post;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ExportForeign implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Post::all();
    }
    public function headings(): array
    {
        return [
            'id',
            'Nama',
            'NIM',
            'Fakultas_Prodi',
            'IPK',
            'BIPA',
            'Jenjang',
            'Status',
            'Angkatan',
            'Gender',
            'Alamat',
            'No_Hp',
            'Negara_Asal',
            'Pendamping_Akademik',
        ];
    }
}