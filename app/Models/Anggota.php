<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    protected $table = 'anggota';

    protected $fillable = [
        'nama',
        'email',
        'nomor_telepon',
        'tanggal_lahir',
        'alamat',
        'tipe_keanggotaan'
    ];
}