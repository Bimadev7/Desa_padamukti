<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Strukturorganisasi extends Model
{
    use HasFactory;
    protected $table = 'strukturorganisasi';

    protected $fillable = [
        'id',
        'nama_pejabat',
        'jabatan',
        'image',
        'nip',
        'deskripsi',
        
    ];






}
