<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $table = 'barang';

    protected $fillable = [
        'id',
        'name',
        'description',
        'img',
        'stock_of_goods',
        'good_stuf',
        'bad_stuf',
        'department'
    ];

    public function peminjaman()
    {
        return $this->hasMany(Peminjaman::class);
    }
}
