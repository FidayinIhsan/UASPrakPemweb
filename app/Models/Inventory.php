<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_barang',
        'kode_barang',
        'kategori',
        'lokasi',
        'jumlah',
        'kondisi',
        'catatan',
    ];
}
