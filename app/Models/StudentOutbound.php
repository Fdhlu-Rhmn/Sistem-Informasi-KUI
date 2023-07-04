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
    'Institusi_Tujuan',
    'Fakultas',
    'Prodi',
    'Negara_Tujuan',
    'Nama_Program',
    'Durasi',
    'Email',
  ];
  protected $table = 'studentoutbounds';
}