<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailKost extends Model
{
    use HasFactory;

    protected $table = 'detail_kost'; // Menetapkan nama tabel yang benar

    protected $fillable = [
        'namaKos', 'lokasiKos', 'hargaKos', 'fasilitas', 'aturanKos', 'gambarKos', 'tagKos', 'gmapsKos',
        'fasilitas1', 'fasilitas2', 'fasilitas3', 'fasilitas4', 'fasilitas5',
        'aturan1', 'aturan2', 'aturan3', 'aturan4', 'aturan5', 'gambarKos1', 'gambarKos2', 'gambarKos3', 'gambarKos4', 'gambarKos5'
    ];
}
