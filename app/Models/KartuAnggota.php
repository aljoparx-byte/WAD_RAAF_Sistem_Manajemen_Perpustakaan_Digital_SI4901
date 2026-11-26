<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KartuAnggota extends Model
{
    protected $table = 'kartu_anggota';

    protected $primaryKey = 'id_kartu';

    protected $fillable = [
        'anggota_id',
        'nomor_kartu'
    ];
}
