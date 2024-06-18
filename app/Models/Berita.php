<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
   

    use HasFactory;
    protected $table = 'berita';

    protected $fillable = [
        'id',
        'judul',
        'image',
        'caption_capture',
        'deskripsi_singkat',
        'deskripsi',
        'category_id'
    ];

    public function kategori()
    {
        return $this->belongsTo(KategoriBerita::class);
    }
}
