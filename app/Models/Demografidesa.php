<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DemografiDesa extends Model
{
    use HasFactory;
    protected $table = 'demografi_desa';
    protected $fillable = [
        'id',
        'angka_kelahiran',
        'angka_kematian',
        'jumlah_penduduk'
    ];
}
