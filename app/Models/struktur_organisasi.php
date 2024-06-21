<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
   

    use HasFactory;
    protected $table = 'struktur_organisasi';

    protected $fillable = [
        'id',
        'nama_penjabat',
        'jabatan',
        'foto',
        'nip',
        'deskripsi'
        
    ];

    // public function kategori()
    // {
    //     return $this->belongsTo(KategoriBerita::class);
    // }
    public function kategori()
    {
        return $this->belongsTo(KategoriBerita::class, 'kategori_id', 'id');
    }
}
