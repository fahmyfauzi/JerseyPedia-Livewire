<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PesananDetail extends Model
{
    public function products()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
    public function pesanans()
    {
        return $this->belongsTo(Pesanan::class, 'pesanan_id', 'id');
    }

    protected $fillable = [
        'jumlah_pesanan',
        'total_harga',
        'namaset',
        'nama',
        'nomor',
        'product_id',
        'pesanan_id',
    ];
}
