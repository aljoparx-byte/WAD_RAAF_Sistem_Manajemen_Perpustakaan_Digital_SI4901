<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penerbit extends Model
{
    protected $fillable = ['nama_perusahaan', 'kategori', 'kontak_sales', 'wilayah', 'alamat'];
}