<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    // use HasFactory;
    // protected $fillable = [
    //     'judul', 'deskripsi_singkat', 'deskripsi'
    // ];

    use HasFactory;
    protected $table = 'berita';

    protected $fillable = [
        'id',
        'judul',
        'deskripsi_singkat',
        'deskripsi'
    ];
}
