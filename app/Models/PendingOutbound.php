<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PendingOutbound extends Model
{
    use HasFactory;
    protected $fillable = [
        'Nama',
        'Institusi_Tujuan',
        'Fakultas',
        'Prodi',
        'Negara_Tujuan',
        'Nama_Program',
        'Durasi',
        'Email',
      ];
      protected $table = 'Pending_Outbounds';
}