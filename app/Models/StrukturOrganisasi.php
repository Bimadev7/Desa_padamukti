<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StrukturOrganisasi extends Model
{
    use HasFactory;
    protected $table = 'struktur_organisasi';

    protected $fillable = [
        'id',
        'nama_pejabat',
        'jabatan',
        'foto',
        'nip',
        'deskripsi'
        
    ];
}
