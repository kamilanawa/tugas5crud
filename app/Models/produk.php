<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $primaryKey = 'id_produk';
    use HasFactory;

    protected $fillable = [
        'nama_produk',
        'Harga',
        'deskripsi',
        'id_kategori',
        
    ];
    public function kategori()
    {
        return $this->belongsTo(kategori::class);
        
    }
}
