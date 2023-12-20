<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MahasiswaModel extends Model
{
    use HasFactory;

    protected $table='mahasiswa';

   protected $fillable=[
    'npm',
    'student_name',
    'bod',
    'class',
    'address',
    'phone_number',
   ];

   protected $hidden=[];
}
