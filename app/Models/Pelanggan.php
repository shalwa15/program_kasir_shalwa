<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;
    protected $fillable =[
        'nama_pelanggan',
        'alamat',
        'no_tlp',
    ];

    public function pelanggan()
    {
        return $this->hasMany(Pelanggan::class, 'id_pelanggan','id');
    }
}

