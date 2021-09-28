<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $table = 'barang';
    protected $fillable = ['nama_barang', 'customer_id', 'jumlah', 'client_pt', 'nama_client', 'barang_keluar', 'sisakeluar', 'deskripsi', 'harga'];

    public function penjualan()
    {
        return $this->hasMany(Penjualan::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
