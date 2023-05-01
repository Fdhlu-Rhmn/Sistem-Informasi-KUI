<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentOutbound extends Model
{
  use HasFactory;
  /**
   * fillable
   *
   * @var array
   */
  protected $fillable = [
    'Nama',
    'Negara_Tujuan',
    'Institusi_Tujuan',
    'Nama_Program',
    'Durasi',
    'Email',
    'Prodi',
    'Fakultas',
  ];
  protected $table = 'StudentOutbound';

}