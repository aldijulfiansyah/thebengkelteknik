<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Perusahaan extends Model
{
    use HasFactory;
    protected $table = 'perusahaan';
    protected $fillable = ['nama_pt', 'alamat', 'kota', 'email', 'no_telp'];


    public function customer()
    {
        return $this->hasMany(Customer::class);
    }
    public function barang()
    {
        return $this->hasMany(Barang::class);
    }
}
