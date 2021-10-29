<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $table = 'barang';
    protected $fillable = ['nama_barang', 'jumlah', 'perusahaan_id', 'customer_id', 'barang_keluar', 'sisakeluar', 'harga', 'deskripsi'];

    public function penjualan()
    {
        return $this->hasMany(Penjualan::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
    public function perusahaan()
    {
        return $this->belongsTo(Perusahaan::class);
    }
}
