<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demografi_desa extends Model
{
    use HasFactory;
    protected $table = 'demografi_desa';

    protected $fillable = [
        'id',
        'nama_lembaga',
        'alamat',
        'deskripsi_profil',
  
    ];
}
