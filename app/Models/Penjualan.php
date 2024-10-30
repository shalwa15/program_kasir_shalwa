<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    use HasFactory;
    protected $fillable =[
        'tanggal_penjualan',
        'total_harga',
        'id_pelanggan',
    ];

    public function pelanggan()
    {
        return $this->hasMany(pelanggan::class, 'id_pelanggan','id');
    }
}

