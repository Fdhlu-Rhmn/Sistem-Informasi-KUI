<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inbound extends Model
{
  use HasFactory;
  /**
   * fillable
   *
   * @var array
   */
  protected $fillable = [
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
