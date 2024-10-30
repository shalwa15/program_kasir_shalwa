<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPenjualan extends Model
{
    use HasFactory;
    protected $guarded = [
        'id_penjualan',
        'id_menu',
        'harga',
        'qty',
        'subtotal',
    ];
    public function detail_penjualan()
    {
        return $this->hashMany(produk::class, 'id_detail_penjualan', 'id');
    }
}
