<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
        /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
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