<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $table = 'barang';
    protected $fillable = ['nama_barang', 'jumlah', 'client_pt', 'nama_client', 'barang_keluar', 'sisakeluar', 'deskripsi', 'harga'];

    public function penjualan()
    {
        return $this->hasMany(Penjualan::class);
    }
}
